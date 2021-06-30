<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Office;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Models\PresencialWork;
use App\Http\Requests\Event\StoreRequest;
use App\Http\Requests\Event\UpdateRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->authorizeResource(Event::class, 'event');
    }

    public function index()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Trabajo Presencial"]
        ];
        return view('events.index',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/events","name" => "Trabajo Presencial"],
            ["name" => "Crear"]
        ];

        $event = new Event();
        
        return view('events.create',compact('event','breadcrumbs','pageConfigs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        /* dd($request); */
        
        $event = Event::create(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]));

        

        return redirect()->route('events.index')->with('success', 'Registrado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        /* dd($event->presencialworks); */
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/users","name" => "Trabajo Presencial"],
            ["name" => "Detalles"]
        ];

        

        $eventdetails = PresencialWork::where('event_id',$event->id)
        ->with('office')
        ->get()
        ->groupBy('office_id');

        /* $presencialsDetails = Event::where('status','ACTIVO')
            ->orderBy('date', 'desc')
            
            ->get()
            ->groupBy(function ($presencial) {
                return Carbon::parse($presencial->date)->format('d/m/Y');
        }); 


        funciona :'v
        ->groupBy('office_id');
        
        */

       /*  dd($eventdetails); */

        return view('events.show', compact('event','pageConfigs','breadcrumbs','eventdetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/events","name" => "Trabajo Presencial"],
            ["name" => "Editar"]
        ];

        /* dd($event); */

        return view('events.edit',compact('event','pageConfigs','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Event $event)
    {
        
        $event->fill(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]))
            ->save();

        return redirect()->route('events.index')
            ->with('info', 'Cambios actualizados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    public function pdf(Event $event){
        
        $eventdetails = PresencialWork::where('event_id',$event->id)
        ->with('office')
        ->get()
        ->groupBy('office_id');


        $url = 'http://200.37.186.114/images/drea/header.png';


        $pdf = PDF::loadView('events.report',compact('eventdetails','event','url'))->setPaper('A4', 'landscape')
        ->setOptions(['isRemoteEnabled' => true,'isHtml5ParserEnabled' => false , 'isPhpEnabled' => true]);
        
        /* $pdf->setBasePath($_SERVER['DOCUMENT_ROOT']); */

        
        return $pdf->stream();


        
    }

}
