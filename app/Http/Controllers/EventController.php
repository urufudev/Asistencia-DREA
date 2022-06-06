<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Office;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Models\PresencialWork;
use App\Http\Requests\Event\StoreRequest;
use App\Http\Requests\Event\UpdateRequest;
use App\Models\Condition;

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
            ["link" => "/dashboard", "name" => "Home"], ["name" => "Trabajo Presencial"]
        ];
        return view('events.index', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
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
            ["link" => "/events", "name" => "Trabajo Presencial"],
            ["name" => "Crear"]
        ];

        $event = new Event();

        /* $conditions = Condition::orderBy('name', 'ASC')
            ->where('status', '=', 'ACTIVO')
            ->pluck('name', 'id'); */
        $conditions = Condition::get();

        return view('events.create', compact('event', 'conditions', 'breadcrumbs', 'pageConfigs'));
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

        $event = Event::create(array_merge($request->except('status', 'conditions'), [
            'status' => $request->status == 'on' ? 'ACTIVO' : 'INACTIVO'
        ]));

        $event->conditions()->sync($request->get('conditions'));

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
            ["link" => "/users", "name" => "Trabajo Presencial"],
            ["name" => "Detalles"]
        ];



        $eventdetails = PresencialWork::where('event_id', $event->id)
            ->with('office')
            ->get()
            /* ->groupBy('office_id'); */

            ->groupBy('user.office.id');

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

        return view('events.show', compact('event', 'pageConfigs', 'breadcrumbs', 'eventdetails'));
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
            ["link" => "/events", "name" => "Trabajo Presencial"],
            ["name" => "Editar"]
        ];
        $conditions = Condition::get();
        /* dd($event); */

        return view('events.edit', compact('event', 'conditions', 'pageConfigs', 'breadcrumbs'));
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

        $event->fill(array_merge($request->except('status', 'conditions'), [
            'status' => $request->status == 'on' ? 'ACTIVO' : 'INACTIVO'
        ]))->save();

        $event->conditions()->sync($request->get('conditions'));

        return redirect()->route('events.index')
            ->with('info', 'Cambios actualizados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event, Request $request)
    {
        dd($request);
    }

    public function destroyuser(Request $request)
    {
        $deleteuser = PresencialWork::where('id', $request->id)->first();

        $deleteuser->delete();

        return redirect()->route('events.show', $deleteuser->event_id)
            ->with('danger', 'Se elimino correctamente.');


        /* dd($deleteuser); */
    }

    public function pdf(Event $event)
    {

        $eventdetails = PresencialWork::where('event_id', $event->id)
            ->with('office')
            /*   ->with('user') */
            /* ->orderBy('user.ap_paterno', 'desc') */

            ->get()
            ->sortBy([
                ['office.name', 'asc'],
                ['user.ap_paterno', 'asc'],
            ])

            /* ->sortBy('office.name')
        ->sortByDesc('user.ap_paterno') */

            ->groupBy('office_id');

        /*   dd($eventdetails); */



        $pdf = PDF::loadView('events.report', compact('eventdetails', 'event'))->setPaper('A4', 'landscape')
            ->setOptions(['isRemoteEnabled' => true, 'isHtml5ParserEnabled' => false, 'isPhpEnabled' => true]);


        return $pdf->stream();
    }
}
