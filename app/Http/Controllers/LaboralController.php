<?php

namespace App\Http\Controllers;

use App\Models\Laboral;
use Illuminate\Http\Request;
use App\Http\Requests\Laboral\StoreRequest;
use App\Http\Requests\Laboral\UpdateRequest;
use Illuminate\Support\Facades\Gate;

class LaboralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->authorizeResource(Laboral::class, 'laboral');
    }

    public function index()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Régimen Laboral"]
        ];
        return view('laborals.index',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
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
            ["link"=> "/laborals","name" => "Regimen Laboral"],
            ["name" => "Crear"]
        ];

        $laboral = new Laboral();
        
        return view('laborals.create',compact('laboral','breadcrumbs','pageConfigs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $laboral = Laboral::create(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]));

        return redirect()->route('laborals.index')->with('success', 'Registrado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboral  $laboral
     * @return \Illuminate\Http\Response
     */
    public function show(Laboral $laboral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboral  $laboral
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboral $laboral)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/laborals","name" => "Regimen Laboral"],
            ["name" => "Editar"]
        ];

        return view('laborals.edit',compact('laboral','pageConfigs','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboral  $laboral
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Laboral $laboral)
    {
        $laboral->fill(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]))
            ->save();

        return redirect()->route('laborals.index')
            ->with('info', 'Cambios actualizados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboral  $laboral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboral $laboral)
    {
        //
    }
}
