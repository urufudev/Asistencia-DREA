<?php

namespace App\Exports;


use Carbon\Carbon;

use App\Models\User;
use App\Models\Event;
use App\Models\Profile;
use App\Models\PresencialWork;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ReportUsersExport implements FromView, ShouldAutoSize
{
    use Exportable;

    protected $condition_id;
    protected $date_report;


    function __construct(/* $condition_id, */$date_report)
    {
        /*  $this->condition_id = $condition_id; */
        $this->date_report = $date_report;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {

        $dateMonthArray = explode('-', $this->date_report  ?? Carbon::now('m'));
        $year = $dateMonthArray[0];
        $month = $dateMonthArray[1];

        $daysInMonth = Carbon::createFromDate($year, $month)->daysInMonth;

        $users = Profile::whereHas('user', function ($query) {
            return $query->where('status', 'ACTIVO');
        })
            ->get()
            ->sortBy([
                ['user.office.name', 'asc'],
                ['user.ap_paterno', 'asc'],
            ])
            ->groupBy('user.office.name');

        /* dd($users); */

        $events = Event::whereMonth('date', $month)->whereYear('date', $year)
            ->get();

        $presencialworks = PresencialWork::with('user', 'event')
            ->whereHas('event', function ($query) use ($year, $month) {
                return $query->whereMonth('date', $month)->whereYear('date', $year);
            })
            ->get()
            ->groupBy('user_id')
            ->map(function ($items) {
                return $items->pluck('user_id', 'event.dateformated');
            });
        dd($presencialworks);
        /* return User::all(); */
        return view('reports.excel', compact('users', 'events', 'presencialworks', 'daysInMonth', 'year', 'month'));
    }
}
