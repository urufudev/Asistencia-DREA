<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'status'
    ];

    public function scopeSearch($query, $val)
    {
        return $query
            ->where('name', 'like', '%' . $val . '%')
            ->Orwhere('description', 'like', '%' . $val . '%');
    }

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
