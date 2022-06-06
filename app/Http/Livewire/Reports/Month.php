<?php

namespace App\Http\Livewire\Reports;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Profile;
use Livewire\Component;
use App\Models\Condition;
use App\Models\PresencialWork;

class Month extends Component
{
    public $date_report;
    public $condition_id;

    public $daysInMonth;
    public $users;
    public $events;
    public $presencialworks;

    public $year;
    public $month;

    public $dateMonthArray;

    public $conditions;

    public function mount()
    {
        $this->conditions = Condition::orderBy('name','ASC')
        ->where('status','=','ACTIVO')   
        ->pluck('name','id');
    }

    public function reportMonth(){

    
        $dateMonthArray = explode('-', $this->date_report );
       /*  dd($this->date_report); */
        $year = $dateMonthArray[0];
        $month = $dateMonthArray[1];
        
        $daysInMonth = Carbon::createFromDate($year, $month)->daysInMonth;

        $users = Profile::with('user')
        ->whereHas('user', function ($query) {
            return $query->where('status','ACTIVO');
        })
        ->when($this->condition_id, function ($query){
            $query->orWhere('condition_id', $this->condition_id);
        })
        ->get()
        ->sortBy([
            ['user.office.name', 'asc'],
            ['user.ap_paterno', 'asc'],
        ])
        ->groupBy('user.office.name')->toBase();

        $events = Event::whereMonth('date',$month )
        ->get();

        $presencialworks = PresencialWork::with('user','event')
        ->get()
        ->groupBy('user_id')
        ->map(function ($items) {
            return $items->pluck('user_id', 'event.dateformated');
        });

       /*  dd($presencialworks); */

        /* $this->users = $users;
        $this->daysInMonth = $daysInMonth;
        $this->events = $events;
        $this->presencialworks = $presencialworks;

        $this->year = $year;
        $this->month = $month;
        $this->dateMonthArray = $dateMonthArray; */
        

    }

    public function render()
    {
       

        
        return view('livewire.reports.month');
    }
}
