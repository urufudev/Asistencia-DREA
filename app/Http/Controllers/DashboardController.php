<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Office;
use App\Models\Laboral;
use App\Models\Pension;
use App\Models\Profile;
use App\Models\Position;
use App\Models\Condition;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;

class DashboardController extends Controller
{
    public function index(){

        $offices=Office::orderBy('name','ASC')
        ->where('status','=','ACTIVO')
        ->get();

        $users=User::orderBy('name','ASC')
        ->where('status','=','ACTIVO')
        ->get();

        $positions=Position::orderBy('name','ASC')
        ->where('status','=','ACTIVO')
        ->get();

        $laborals=Laboral::orderBy('name','ASC')
        ->where('status','=','ACTIVO')
        ->get();

        $conditions=Condition::orderBy('name','ASC')
        ->where('status','=','ACTIVO')
        ->get();




        $pensions=Pension::orderBy('name','ASC')
        ->where('status','=','ACTIVO')
        ->get();

        
        $profiles_condition = Profile::with('user')->get()->where('user.status','ACTIVO')
        ->countBy('condition_id');

        $condition_names = [];
        $condition_counts = collect($profiles_condition)->values()->all();
 
        foreach ($profiles_condition as $key => $value) {
            $condition = Condition::find($key);
             array_push($condition_names, $condition->name);
        }

        $profiles_office = Profile::with('user')->get()->where('user.status','ACTIVO')
        ->countBy('user.office_id');

        /* dd($profiles_office); */

        $office_names = [];
        $office_counts = collect($profiles_office)->values()->all();
 
        foreach ($profiles_office as $key => $value) {
            $office = Office::find($key);
 
             array_push($office_names, $office->description);
        }

        /* $profiles_condition = Profile::
        all()
        ->countBy('condition_id'); */


        /* $profiles_condition = Profile::with('condition')->get()->pluck('condition.name',);
         */

                 
       /* dd($profiles_condition); */

        

        $chart =  LarapexChart::pieChart()
        ->setTitle('Total de Trabajadores / Condición Laboral')
        ->addData($condition_counts)
        ->setDataLabels()
        ->setLabels($condition_names);
        /*->addData([25, 20, 30])
        ->setLabels(['Data 1','Data 2','Data 3']);*/


        $chart_office = LarapexChart::pieChart()
        ->setTitle('Trabajadores / Oficina')
        ->addData($office_counts)
        ->setDataLabels()
        ->setLabels($office_names);

        /* --- Cumpleaños */
        $date = Carbon::now();

        $userbirthdays = User::whereHas('profile', function ($query) {
            $query->whereMonth('birthday',Carbon::now()->month);
           
        })->get()->sortBy('profile.birthday');;  /* ->take(5)->get() */

        $profilebirthdays = Profile::with('user')
        ->whereMonth('birthday',Carbon::now()->month)
        ->orderBy('birthday','asc')
        ->get();
        
        /* dd($profilebirthdays); */

        return view('dashboard',compact('chart','chart_office','profilebirthdays','offices','users','positions','laborals','conditions','pensions'));
    }
    //ecommerce
    public function dashboardEcommerce(){
        return view('pages.dashboard-ecommerce');
    }
    // analystic
    public function dashboardAnalytics(){
        return view('pages.dashboard-analytics');
    }
}
