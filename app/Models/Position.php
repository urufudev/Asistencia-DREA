<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','description','status'
    ];

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

    public function scopeSearch($query, $val)
    {
        return $query
        ->where('name','like','%'.$val.'%')
        ->Orwhere('description','like','%'.$val.'%')
        ;
    }
}
