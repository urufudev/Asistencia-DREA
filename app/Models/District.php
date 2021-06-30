<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'province_id',
        'department_id',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}
