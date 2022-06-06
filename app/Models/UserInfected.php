<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserInfected extends Model
{
    use HasFactory;

    protected $fillable=[
        'infected_id','diagnosis_date','diagnosis_entity','break_number','break_start','break_end','high_entity','high_date'
    ];

    protected $dates = ['diagnosis_date','break_start', 'break_end','high_date'];

    public function getDiagnosisDateFormatedAttribute()
    {
        if ($this->diagnosis_date != null) {
            return Carbon::parse($this->diagnosis_date)->format('d/m/Y');
        }
        else{
            return 'S/R';
        }
        
    }

    public function getBreakStartFormatedAttribute()
    {
        if ($this->break_start != null) {
            return Carbon::parse($this->break_start)->format('d/m/Y');
        }
        else{
            return 'S/R';
        }
        
    }

    public function getBreakEndFormatedAttribute()
    {
        if ($this->break_end != null) {
            return Carbon::parse($this->break_end)->format('d/m/Y');
        }
        else{
            return 'S/R';
        }
        
    }

    public function getHighDateFormatedAttribute()
    {
        if ($this->high_date != null) {
            return Carbon::parse($this->high_date)->format('d/m/Y');
        }
        else{
            return 'S/R';
        }
        
    }

    public function infected()
    {
        return $this->belongsTo(Infected::class);
    }
}
