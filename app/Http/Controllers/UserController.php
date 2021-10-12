<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Office;
use App\Models\Laboral;
use App\Models\Pension;
use App\Models\Profile;
use App\Models\Position;
use App\Models\Condition;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;

class UserController extends Controller
{
  public function __construct()
  {
      $this->authorizeResource(User::class, 'user');
  }

  
    public function index()
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],["name" => "Usuarios"]
        ];
        
    
        return view('users.index',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
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
            ["link"=> "/users","name" => "Usuarios"],
            ["name" => "Crear"]
        ];

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

        
        $roles = Role::get();
        return view('users.create',compact('offices','laborals','pensions','positions','conditions','roles','pageConfigs','breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $user=new User;

        $user->name = $request['name'];
        $user->ap_paterno = $request['ap_paterno'];
        $user->ap_materno = $request['ap_materno'];
        $user->dni  =  $request['dni'];
        $user->office_id  =  $request['office_id'];
        $user->email  =  $request['email'];
        $user->password  =  bcrypt($request['password']);
        
        $user->save();
       
        $profile = new Profile;
        $profile->user_id = $user->id;
        $profile->photo = 'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name='.$user->name.'+'.$user->ap_paterno;
        $profile->save();

        //actualize los roles
        $user->roles()->sync($request->get('roles'));


        return redirect()->route('users.index')
            ->with('success','Registrado con exito.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/users","name" => "Usuarios"],
            ["name" => "Perfil"]
        ];

        $office = Office::find($user->office->id);
        
        /* $users = User::where('office_id', $office->id)
            ->where('status', 'ACTIVO')
            ->join('profiles as pro', 'users.id', '=', 'pro.user_id')
            ->select('users.id','users.name','users.ap_paterno' ,'users.ap_paterno' ,'users.dni' ,'users.status', 'pro.photo','pro.position_id')
            ->get(); */

        $users = User::where('office_id', $office->id)
        ->where('status', 'ACTIVO')
        ->with('profile')
        
        ->get();

        /* dd($user->profile->birthday); */

        return view('users.show', compact('user','pageConfigs','breadcrumbs','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/users","name" => "Usuarios"],
            ["name" => "Editar"]
        ];

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


        $roles = Role::get();

        return view('users.edit',compact('offices','laborals','pensions','positions','conditions','user','roles','pageConfigs','breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
        $user->name = $request['name'];
        $user->ap_paterno = $request['ap_paterno'];
        $user->ap_materno = $request['ap_materno'];
        $user->dni  =  $request['dni'];
        $user->email  =  $request['email'];
        $user->office_id  =  $request['office_id'];
        
        if($request['password']!=null)
        {
            $user->password  =  bcrypt($request['password']);
        }
        $user->save();
        
        if($request['name']!=null || $request['ap_paterno']!=null)
        {
            $profile = Profile::find($user);
            $profile = Profile::where('user_id',$user->id)->first();
            /* dd($profile); */
            $profile->photo = 'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name='.$user->name.'+'.$user->ap_paterno;
        
            $profile->save();
        }
        
        
        //actualize los roles
        $user->roles()->sync($request->get('roles'));
        
        return redirect()->route('users.index')
            ->with('success','Actualizado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

}
