<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\PresencialWork;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','date','userlimit','start','end','status'
    ];

    protected $dates = ['date','start', 'end']; 

 /*    public function getDateAttribute()
    {
        return $this->date->diffForHumans();
    } */

    public function presencialworks()
    {
        return $this->hasMany(PresencialWork::class);
    }

    public function scopeSearch($query, $val)
    {
        return $query
        ->where('name','like','%'.$val.'%')
        ->Orwhere('date','like','%'.$val.'%')
        ;
    }

    public function getStartDateAttribute()
    {
        if ($this->start != null) {
            return Carbon::parse($this->start)->format('d/m/Y H:i A');
        }
        else{
            return 'S/R';
        }
        
    }

    public function getEndDateAttribute()
    {
        if ($this->end != null) {
            return Carbon::parse($this->end)->format('d/m/Y H:i A');
        }
        else{
            return 'S/R';
        }
        
    }

}
