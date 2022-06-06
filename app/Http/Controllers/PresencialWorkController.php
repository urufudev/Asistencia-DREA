<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\PresencialWork;
use Illuminate\Support\Facades\Gate;
use Acaronlex\LaravelCalendar\Calendar;
use Illuminate\Support\Facades\Auth;

class PresencialWorkController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(PresencialWork::class, 'presencial');
    }

    public function index()
    {
        /* $pageConfigs = ['pageHeader' => true]; */
        $pageConfigs = ['pageHeader' => true,'isMenuCollapsed' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Registro de Trabajo Presencial"]
        ];
        return view('presencials.index',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }


    public function store(Request $request, Event $event)
    {
        
        $event->presencialworks()->create([
            'event_id' => request('1'),
            'user_id' => request('2'),
            
        ]);

        return redirect()->route('presencials.index')->with('success', 'Registrado satisfactoriamente.');
    }
    
    public function attendance(Event $event)
    {

        $pageConfigs = ['pageHeader' => true,'isMenuCollapsed' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Registro de Asistencia de Trabajo Presencial"]
        ];
        
        return view('presencials.attendance',compact('event'),['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]); 
    }

    public function attendacelist(){
        Gate::authorize('attendance', 'Models\PresencialWork');

        $events = Event::where('status','ACTIVO')->get();

        return view('presencials.attendance-list',compact('events'));
    }

    public function myattendance(){
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Historial de Registro de Trabajo Presencial"]
        ];


        $user= Auth::user()->id;

        $presencial_works = PresencialWork::where('user_id',$user)->get();

        
        $myattendances = [];
        foreach ($presencial_works as $presencial_work) {

            $myattendance[] = Calendar::event(
                substr($presencial_work->event->name,10 ), //event title
                true, //full day event?
                $presencial_work->event->date, //start time (you can also use Carbon instead of DateTime)
                $presencial_work->event->date,
                $presencial_work->event->id,
                [
                    'url' => '#',
                    'display' => 'auto',
                    /* 'borderColor' => 'red', */
                    

                    //any other full-calendar supported parameters
                ]
            );
        }

        $calendar = new Calendar();
        $calendar->addEvents($myattendance)
        ->setOptions([
            'locale' => 'es',
            'firstDay' => 1,
            'background' => true,
            'height'=> 700,
            'displayEventTime' => true,
            'initialView' => 'dayGridMonth',
            'selectable' => true,
            'headerToolbar' => [
                'end' => 'prev,next',
            ],

            
        ]);

        $calendar->setId('1');
        $calendar->setCallbacks([
            'select' => 'function(selectionInfo){}',
            'eventClick' => 'function(event){}'
        ]);
        
        return view('presencials.myattendance',compact('calendar'),['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
        

    }

}
