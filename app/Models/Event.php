<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\PresencialWork;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'date', 'userlimit', 'start', 'end', 'status', 'conditions'
    ];

    protected $dates = ['date', 'start', 'end'];

    public function getDateFormatedAttribute()
    {
        if ($this->date != null) {
            return Carbon::parse($this->date)->format('Y-m-d');
        } else {
            return 'Sin Datos';
        }
    }

    public function presencialworks()
    {
        return $this->hasMany(PresencialWork::class);
    }

    public function conditions()
    {
        return $this->belongsToMany(Condition::class);
    }

    public function scopeSearch($query, $val)
    {
        return $query
            ->where('name', 'like', '%' . $val . '%')
            ->Orwhere('date', 'like', '%' . $val . '%');
    }

    public function getStartDateAttribute()
    {
        if ($this->start != null) {
            return Carbon::parse($this->start)->format('d/m/Y h:i A');
        } else {
            return 'S/R';
        }
    }

    public function getEndDateAttribute()
    {
        if ($this->end != null) {
            return Carbon::parse($this->end)->format('d/m/Y h:i A');
        } else {
            return 'S/R';
        }
    }
}
