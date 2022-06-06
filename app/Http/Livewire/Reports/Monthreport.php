<?php

namespace App\Http\Livewire\Reports;

use App\Exports\ReportUsersExport;
use Carbon\Carbon;
use App\Models\Event;
use App\Models\Office;
use App\Models\Laboral;
use App\Models\Profile;
use Livewire\Component;
use App\Models\Condition;
use App\Models\PresencialWork;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;
class Monthreport extends Component
{
   

    /*-----------------DATATABLE -----------------*/

    public $date_report;
    public $condition_id;
    public $office_id;

    public $daysInMonth;
    public $users;
    public $events;
    public $presencialworks;

    public $year;
    public $month;

    public $dateMonthArray;

   /*  public $conditions; */


    public function render()
    {
        /* dd(request()->getRequestUri()); */

        $conditions = Condition::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        $offices = Office::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');

        return view('livewire.reports.monthreport',compact('conditions','offices'));
    }


    public function getUsers()
    {
        /* dd($this->office_id); */

        $users = Profile::with('user')
        ->whereHas('user', function ($query) {
            return $query->where('status','ACTIVO')->where('office_id',$this->office_id);
        })->when($this->condition_id, function ($query){
            $query->where('condition_id', $this->condition_id);
        })
        
        ->get()
        ->sortBy([
            ['user.office.name', 'asc'],
            ['user.ap_paterno', 'asc'],
        ])
        ->groupBy('user.office.name')->toBase();

        $this->users = $users;
    }

    public function getPresencial()
    {
        $presencialworks = PresencialWork::with('event')
        ->whereHas('event', function ($query) {
            return $query->whereMonth('date',$this->month)->whereYear('date',$this->year);
        })
        ->whereHas('user', function ($query) {
            return $query->where('office_id',$this->office_id);
        })
        ->get()
        ->groupBy('user_id')
        ->map(function ($items) {
            return $items->pluck('user_id', 'event.dateformated');
        }); 

        /* dd($presencialworks); */

         $this->presencialworks = $presencialworks;
    }

    public function reportMonth()
    {
        $dateMonthArray = explode('-', $this->date_report ?? Carbon::now('m'));
        $year = $dateMonthArray[0];
        $month = $dateMonthArray[1];
        
        

        $daysInMonth = Carbon::createFromDate($year, $month)->daysInMonth;

        $this->getUsers();
        /* $users = Profile::with('user')
        ->whereHas('user', function ($query) {
            return $query->where('status','ACTIVO');
        })
        ->when($this->condition_id, function ($query){
            $query->where('condition_id', $this->condition_id);
        })
        ->get()
        ->sortBy([
            ['user.office.name', 'asc'],
            ['user.ap_paterno', 'asc'],
        ])
        ->groupBy('user.office.name')->toBase(); */

        $events = Event::whereMonth('date',$month )->whereYear('date',$year)
        ->get();

        $this->year = $year;
        
        $this->month = $month;
        $this->getPresencial(); 
        /* $presencialworks = PresencialWork::with('user','event')
        ->get()
        ->groupBy('user_id')
        ->map(function ($items) {
            return $items->pluck('user_id', 'event.dateformated');
        }); */

        /*  dd($presencialworks); */

        /* $this->users = $users; */
        $this->daysInMonth = $daysInMonth;
        $this->events = $events;
       /*  $this->presencialworks = $presencialworks; */

        
        $this->dateMonthArray = $dateMonthArray;
    }

    public function reportMonthExcel()
    {
        return Excel::download(new ReportUsersExport($this->date_report), 'reporte.xlsx');
    }


    
}
