<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Office;
use App\Models\Laboral;
use App\Models\Pension;
use App\Models\Profile;
use App\Models\Position;
use App\Models\Condition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Profile\UpdatePasswordRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();

        $office = Office::find($user->office->id);
        $users = User::where('office_id', $office->id)
        ->where('status', 'ACTIVO')
        ->with('profile')
        
        ->get();
       /*  dd($user->profile->position->name); */

        return view('profile.index', compact('user','users'));
    }

    public function setting()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/profile","name" => "Perfil"],
            ["name" => "Configuración de Perfil"]
        ];

        $tab = 'personal-info';

        $user = Auth::user();

        $offices=Office::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $laborals=Laboral::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $pensions=Pension::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $positions=Position::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $conditions=Condition::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        return view('profile.setting',compact('pageConfigs','breadcrumbs','tab','user','offices','laborals','pensions','positions','conditions'));
    }

    public function updateInfo(Request $request, User $user)
    {
        
        $user->update($request->all());
        $user->profile->update($request->all());

        return back()->with('success', 'Actualizado con exito.');

    }

    public function updateLaboralInfo(Request $request, User $user)
    {
        
        $user->update($request->all());
        $user->profile->update($request->all());

        return back()->with('success', 'Actualizado con exito.');

    }

    public function updatePassword(UpdatePasswordRequest $request, User $user)
    {
        
        $user->update([
            'password' => Hash::make( request('password'))
        ]);
        return back()->with('success', 'La contraseña se cambió con exitó.');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
