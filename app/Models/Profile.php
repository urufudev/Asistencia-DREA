<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Laboral;
use App\Models\District;
use App\Models\Position;
use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable=[
        'photo','birthday','genre','phone','vaccine','vaccine_first','vaccine_second',
        'address','department_id',
        'province_id','district_id','laboral_id','pension_id','position_id',
        'condition_id'
    ];

    protected $dates = ['birthday','vaccine_first', 'vaccine_second']; 

    public function getBirthdayDateAttribute()
    {
        
        if ($this->birthday != null) {
            return Carbon::parse($this->birthday)->format('d/m/Y');
        }
        else{
            return 'Sin Datos';
        }
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }


    
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function laboral()
    {
        return $this->belongsTo(Laboral::class);
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }

    public function pension()
    {
        return $this->belongsTo(Pension::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
