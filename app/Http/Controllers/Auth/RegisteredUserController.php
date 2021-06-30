<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Office;
use App\Models\Laboral;
use App\Models\Pension;
use App\Models\Profile;
use App\Models\Position;
use App\Models\Condition;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\RegisterRequest;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
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

        return view('auth.register',compact('offices','laborals','pensions','positions','conditions'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \App\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request)
    {
        

        Auth::login($user = User::create([
            'name' => $request->name,
            'ap_paterno' => $request->ap_paterno,
            'ap_materno' => $request->ap_materno,
            'dni' => $request->dni,
            'email' => $request->email,
            'office_id'=>$request->office_id,
            'password' => Hash::make($request->password),
            
        ]));

        $user->assignRole('Trabajador');

        $profile = new Profile;
        $profile->user_id = $user->id;
        $profile->photo = 'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name='.$user->name.'+'.$user->ap_paterno;
        $profile->birthday = $request->birthday;
        $profile->genre = $request->genre;
        $profile->phone = $request->phone;
        $profile->department_id = $request->department_id;
        $profile->province_id = $request->province_id;
        $profile->district_id = $request->district_id;
        $profile->address = $request->address;
        $profile->laboral_id = $request->laboral_id;
        $profile->pension_id = $request->pension_id;
        $profile->position_id = $request->position_id;
        $profile->condition_id = $request->condition_id;



        $profile->save();


        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
