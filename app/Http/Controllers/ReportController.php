<?php

namespace App\Http\Controllers;

use App\Exports\ReportUsersExport;
use App\Models\Condition;
use App\Models\Event;
use Carbon\Carbon;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\PresencialWork;

class ReportController extends Controller
{

    public function index()
    {

        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/reports","name" => "Reportes"],
            ["name" => "Reporte Mensual de Trabajo Presencial"]
        ];

        return view('reports.index',compact('pageConfigs','breadcrumbs'));
    }
    
    public function reports(Request $request)
    {

        $pageConfigs = ['pageHeader' => true];
        $breadcrumbs = [
            ["link" => "/dashboard", "name" => "Home"],
            ["link"=> "/reports","name" => "Reportes"],
            ["name" => "Reporte Mensual de Trabajo Presencial"]
        ];
        /* dd($request->condition_id); */

        $conditions=Condition::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');


        /* $date = '2021-10'; */
        
        $dateMonthArray = explode('-', $request->date_report  ?? Carbon::now('m'));
        $year = $dateMonthArray[0];
        $month = $dateMonthArray[1];
        
        $daysInMonth = Carbon::createFromDate($year, $month)->daysInMonth;

        $users = Profile::whereHas('user', function ($query) {
            return $query->where('status','ACTIVO');
        })
        ->when($request->has('condition_id'), function ($query) use ($request) {
            $query->where('condition_id', $request->condition_id);
        })
        ->get()
        ->sortBy([
            ['user.office.name', 'asc'],
            ['user.ap_paterno', 'asc'],
        ])
        ->groupBy('user.office.name');

        /* dd($users); */

        $events = Event::whereMonth('date',$month)
        ->get();

        $presencialworks = PresencialWork::with('user','event')
        ->get()
        ->groupBy('user_id')
        ->map(function ($items) {
            return $items->pluck('user_id', 'event.dateformated');
        });

        return view('reports.index',compact('daysInMonth','presencialworks','year','month','users','conditions','pageConfigs','breadcrumbs'));
    }

    public function exportExcel(Request $request)
    {
        $conditions=Condition::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');


        /* $date = '2021-10'; */
        
        $dateMonthArray = explode('-', $request->date_report  ?? Carbon::now('m'));
        $year = $dateMonthArray[0];
        $month = $dateMonthArray[1];
        
        $daysInMonth = Carbon::createFromDate($year, $month)->daysInMonth;

        $users = Profile::whereHas('user', function ($query) {
            return $query->where('status','ACTIVO');
        })
        ->when($request->has('condition_id'), function ($query) use ($request) {
            $query->where('condition_id', $request->condition_id);
        })
        ->get()
        ->sortBy([
            ['user.office.name', 'asc'],
            ['user.ap_paterno', 'asc'],
        ])
        ->groupBy('user.office.name');

        /* dd($users); */

        $events = Event::whereMonth('date',$month)
        ->get();

        $presencialworks = PresencialWork::with('user','event')
        ->get()
        ->groupBy('user_id')
        ->map(function ($items) {
            return $items->pluck('user_id', 'event.dateformated');
        });


        /* $reportExport = new ReportUsersExport; */

        

    }
}
