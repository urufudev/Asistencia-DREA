<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Office extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','description','status'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function presencialworks()
    {
        return $this->hasMany(PresencialWork::class);
    }

    public function scopeSearch($query, $val)
    {
        return $query
        ->where('name','like','%'.$val.'%')
        ->Orwhere('description','like','%'.$val.'%')
        ;
    }
}
