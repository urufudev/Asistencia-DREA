<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Infected;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\UserInfected;
use Illuminate\Http\Request;
use App\Http\Requests\Infected\StoreRequest;
use App\Http\Requests\Infected\UpdateRequest;

class InfectedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Infected::class, 'infected');
    }

    public function index()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Infectados de COVID19"]
        ];
        return view('infecteds.index',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
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
            ["link"=> "/infecteds","name" => "Infectados de COVID19"],
            ["name" => "Crear"]
        ];

        $users = User::where('status','ACTIVO')
        ->get()
        ->pluck('full_name','id');

        $infected = new Infected();
        
        return view('infecteds.create',compact('infected','users','breadcrumbs','pageConfigs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $infected = Infected::create(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]));

        return redirect()->route('infecteds.show',$infected->id)->with('success', 'Registrado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infected  $infected
     * @return \Illuminate\Http\Response
     */
    public function show(Infected $infected)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/infecteds","name" => "Infectados de COVID19"],
            ["name" => "Ver"]
        ];
        

        return view('infecteds.show', compact('infected','pageConfigs','breadcrumbs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infected  $infected
     * @return \Illuminate\Http\Response
     */
    public function edit(Infected $infected)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/infecteds","name" => "Infectados de COVID19"],
            ["name" => "Editar"]
        ];
        $users = User::where('status','ACTIVO')
        ->pluck('name','id');

        return view('infecteds.edit',compact('users','infected','pageConfigs','breadcrumbs'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infected  $infected
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Infected $infected)
    {
        $infected->fill(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]))
            ->save();

        return redirect()->route('infecteds.index')
            ->with('info', 'Cambios actualizados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infected  $infected
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infected $infected)
    {
        //
    }

    public function pdf()
    {
        $userinfecteds = Infected::with('userinfecteds','user')
        ->where('status','ACTIVO')
        ->get()
        ->sortBy([
            ['user.office.name', 'asc'],
            ['user.ap_paterno', 'asc'],
        ])
        ->groupBy('user.office.name');

        /* dd($userinfecteds); */

        $pdf = PDF::loadView('infecteds.report',compact('userinfecteds'))->setPaper('A4', 'landscape')
        ->setOptions(['isRemoteEnabled' => true,'isHtml5ParserEnabled' => false , 'isPhpEnabled' => true]);
        
        
        return $pdf->stream();
        
    }
}
