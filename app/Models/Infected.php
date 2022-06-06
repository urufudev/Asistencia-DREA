<?php

namespace App\Models;

use App\Models\User;

use App\Models\UserInfected;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Infected extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'status'
    ];

    public function userinfecteds()
    {
        return $this->hasMany(UserInfected::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, $val)
    {
        return $query
            ->WhereHas('user', function ($query) use ($val) {
                $query->where('dni', 'like', '%' . $val . '%')
                    ->Orwhere('name', 'like', '%' . $val . '%')
                    ->Orwhere('ap_paterno', 'like', '%' . $val . '%')
                    ->Orwhere('ap_materno', 'like', '%' . $val . '%');
            });
    }
}
