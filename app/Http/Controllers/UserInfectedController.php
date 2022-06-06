<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Infected;
use App\Models\UserInfected;
use Illuminate\Http\Request;
use App\Http\Requests\UserInfected\StoreRequest;
use App\Http\Requests\UserInfected\UpdateRequest;

class UserInfectedController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(UserInfected::class, 'userinfected');
    }

    public function index()
    {
/*         $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Carreras"]
        ];
        return view('carrers.index',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Infected $infected)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/infecteds/".$infected->id,"name" => "Diagnosticos de ".$infected->name],
            ["name" => "Crear"]
        ];
        $entitys = array(1 => 'ESSALUD',2 => 'MINSA',3 => 'PARTICULAR');
        $entitys[null] = 'SELECCIONE ...';

        /* $users = User::where('status','ACTIVO')
        ->pluck('name','id');
        dd($array); */

        $userinfected = new UserInfected();
        
        return view('userinfecteds.create',compact('entitys','userinfected','infected','breadcrumbs','pageConfigs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, Infected $infected)
    {
        
        $infected->userinfecteds()->create(
            $request->all()
        );


        return redirect()->route('infecteds.show',$infected)->with('success', 'Registrado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserInfected  $userinfected
     * @return \Illuminate\Http\Response
     */
    public function show(UserInfected $userinfected)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserInfected  $userinfected
     * @return \Illuminate\Http\Response
     */
    public function edit(Infected $infected, UserInfected $userinfected)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/infecteds/".$infected->id,"name" => "Diagnosticos de".$infected->name],
            ["name" => "Editar"]
        ];

        $entitys = array(1 => 'ESSALUD',2 => 'MINSA',3 => 'PARTICULAR');
        $entitys[null] = 'SELECCIONE ...';


        return view('userinfecteds.edit',compact('entitys','userinfected','infected','pageConfigs','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserInfected  $userinfected
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request,  Infected $infected,UserInfected $userinfected)
    {

        $userinfected->update($request->all());


        return redirect()->route('infecteds.show',$infected)
            ->with('info', 'Cambios actualizados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserInfected  $userinfected
     * @return \Illuminate\Http\Response
     */
    public function destroy( Infected $infected ,UserInfected $userinfected)
    {
        
            $userinfected->delete();

            return redirect()->route('infecteds.show',$infected)
            ->with('danger', 'Se elimino correctamente.');


    }


}
