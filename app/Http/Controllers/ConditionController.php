<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Condition;
use Illuminate\Http\Request;
use App\Http\Requests\Condition\StoreRequest;
use App\Http\Requests\Condition\UpdateRequest;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->authorizeResource(Condition::class, 'condition');
    }
    public function index()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Condición Laboral"]
        ];
        return view('conditions.index',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
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
            ["link"=> "/conditions","name" => "Condición Laboral"],
            ["name" => "Crear"]
        ];

        $condition = new Condition();
        
        return view('conditions.create',compact('condition','breadcrumbs','pageConfigs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $condition = Condition::create(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]));

        return redirect()->route('conditions.index')->with('success', 'Registrado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function show(Condition $condition)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/conditions","name" => "Lista de Condición Laboral"],
            ["name" => "Ver"]
        ];


        $users = User::where('status','ACTIVO')
            ->with('profile')
            ->whereHas('profile', function ($query) use ($condition) {
                return $query->where('condition_id', $condition->id);
            })
            ->orderBy('name', 'asc')
            ->get()
            
            ->groupBy('office.name');

            /* dd($users); */

        return view('conditions.show',compact('condition','users','pageConfigs','breadcrumbs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function edit(Condition $condition)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/conditions","name" => "Condición Laboral"],
            ["name" => "Editar"]
        ];

        return view('conditions.edit',compact('condition','pageConfigs','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Condition $condition)
    {
        $condition->fill(array_merge($request->except('status'),[
            'status'=> $request->status == 'on' ? 'ACTIVO' : 'INACTIVO' 
        ]))
            ->save();

        return redirect()->route('conditions.index')
            ->with('info', 'Cambios actualizados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condition $condition)
    {
        //
    }
}
