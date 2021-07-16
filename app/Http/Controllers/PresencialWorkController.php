<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\PresencialWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PresencialWorkController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(PresencialWork::class, 'presencial');
    }

    public function index()
    {
        $pageConfigs = ['pageHeader' => true];
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

}
