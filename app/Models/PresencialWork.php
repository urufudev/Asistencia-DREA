<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Event;
use App\Models\Office;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PresencialWork extends Model
{
    use HasFactory;

    protected $fillable=[
        'event_id','user_id','office_id','input','output','feber','respire','fleme','olfate',
        'personscovid','medicine','name_medicine'


    ];
    

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function getInputTimeAttribute()
    {
        if ($this->input != null) {
            return Carbon::parse($this->input)->format('H:i A');
        }
        else{
            return 'S/R';
        }
        
    }

    public function getOutputTimeAttribute()
    {
        if ($this->output != null) {
            return Carbon::parse($this->output)->format('H:i A');
        }
        else{
            return 'S/R';
        }
        
    }

}
