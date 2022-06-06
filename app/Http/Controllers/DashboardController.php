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
    public function index()
    {

        $offices = Office::orderBy('name', 'ASC')
            ->where('status', '=', 'ACTIVO')
            ->get();

        $users = User::orderBy('name', 'ASC')
            ->where('status', '=', 'ACTIVO')
            ->get();

        $positions = Position::orderBy('name', 'ASC')
            ->where('status', '=', 'ACTIVO')
            ->get();

        $users_vaccines = Profile::where('vaccine', 'NO')
            ->orWhere('vaccine_first', null)
            ->orWhere('vaccine_second', null)
            ->whereHas('user', function ($q) {
                $q->where('status', 'ACTIVO');
            })
            ->get();

        $users_vaccines_third = Profile::where('vaccine_third', null)
            ->whereHas('user', function ($q) {
                $q->where('status', 'ACTIVO');
            })
            ->get();



        /* ------- Tipo Trabajadores por Oficina ------ */
        $profiles_condition = Profile::with('user')->get()->where('user.status', 'ACTIVO')
            ->countBy('condition_id');

        $condition_names = [];
        $condition_counts = collect($profiles_condition)->values()->all();

        foreach ($profiles_condition as $key => $value) {
            $condition = Condition::find($key);
            array_push($condition_names, $condition->name . ' - ' . $condition->profiles->count());
        }


        /* ------- Trabajadores por Oficina ------ */

        $profiles_office = Profile::with('user')->get()->where('user.status', 'ACTIVO')
            ->countBy('user.office_id');

        /*  dd($profiles_office); */

        $office_names = [];
        $office_counts = collect($profiles_office)->values()->all();

        foreach ($profiles_office as $key => $value) {
            $office = Office::find($key);

            array_push($office_names, $office->description . ' - ' . $office->users->count());
        }


        /* ------ VACUNADOS ------- */

        $profiles_vaccines = Profile::with('user')->get()->where('user.status', 'ACTIVO')
            ->countBy('vaccine');

        /* dd($profiles_vaccines); */

        $answers = collect($profiles_vaccines)->keys()->all();
        $vaccine_counts = collect($profiles_vaccines)->values()->all();




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

        $chart_vaccine = LarapexChart::donutChart()
            ->setTitle('Vacunados')
            ->addData($vaccine_counts)
            ->setDataLabels()
            ->setLabels($answers)
            ->setColors(['#10B981', '#EF4444']);

        /* --- Cumpleaños */
        $date = Carbon::now();

        /* $userbirthdays = User::whereHas('profile', function ($query) {
            $query->whereMonth('birthday',Carbon::now()->month);
           
        })->get()->sortBy('profile.birthday');; */  /* ->take(5)->get() */

        $profilebirthdays = Profile::with('user')
            ->whereMonth('birthday', Carbon::now()->month)

            ->orderBy('birthday', 'asc')
            ->get()
            ->where('user.status', 'ACTIVO');

        /* dd($profilebirthdays); */

        return view('dashboard', compact('chart', 'chart_office', 'chart_vaccine', 'profilebirthdays', 'offices', 'users', 'positions', 'users_vaccines', 'users_vaccines_third'));
    }
    //ecommerce
    public function dashboardEcommerce()
    {
        return view('pages.dashboard-ecommerce');
    }
    // analystic
    public function dashboardAnalytics()
    {
        return view('pages.dashboard-analytics');
    }
}
