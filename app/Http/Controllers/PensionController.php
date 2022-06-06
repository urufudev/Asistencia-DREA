<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pension;
use Illuminate\Http\Request;
use App\Http\Requests\Pension\StoreRequest;
use App\Http\Requests\Pension\UpdateRequest;

class PensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Pension::class, 'pension');
    }

    public function index()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Régimen Pensionario"]
        ];
        return view('pensions.index',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);

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
            ["link"=> "/pensions","name" => "Regimen Pensionario"],
            ["name" => "Crear"]
        ];

        $pension = new Pension();
        
        return view('pensions.create',compact('pension','breadcrumbs','pageConfigs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $pension = Pension::create(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]));

        return redirect()->route('pensions.index')->with('success', 'Registrado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pension  $pension
     * @return \Illuminate\Http\Response
     */
    public function show(Pension $pension)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/pensions","name" => "Lista de Régimen Pensionario"],
            ["name" => "Ver"]
        ];


        $users = User::where('status','ACTIVO')
            ->with('profile')
            ->whereHas('profile', function ($query) use ($pension) {
                return $query->where('pension_id', $pension->id);
            })
            ->orderBy('name', 'asc')
            ->get()
            
            ->groupBy('office.name');
        
        return view('pensions.show',compact('pension','users','pageConfigs','breadcrumbs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pension  $pension
     * @return \Illuminate\Http\Response
     */
    public function edit(Pension $pension)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/pensions","name" => "Regimen Pensionario"],
            ["name" => "Editar"]
        ];

        return view('pensions.edit',compact('pension','pageConfigs','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pension  $pension
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Pension $pension)
    {
        $pension->fill(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]))
            ->save();

        return redirect()->route('pensions.index')
            ->with('info', 'Cambios actualizados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pension  $pension
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pension $pension)
    {
        //
    }
}
