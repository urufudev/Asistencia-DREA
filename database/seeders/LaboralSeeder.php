<?php

namespace Database\Seeders;

use App\Models\Laboral;
use Illuminate\Database\Seeder;

class LaboralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Laboral::create([
            'name'=>'DLEG 1057',
            'description'=>'DLEG 1057',
            'status'=>'ACTIVO'
        ]);

        Laboral::create([
            'name'=>'DLEG 276',
            'description'=>'DLEG 276',
            'status'=>'ACTIVO'
        ]);
        Laboral::create([
            'name'=>'DLEG 295',
            'description'=>'DLEG 295',
            'status'=>'ACTIVO'
        ]);

        Laboral::create([
            'name'=>'DLEG 728',
            'description'=>'DLEG 728',
            'status'=>'ACTIVO'
        ]);
        Laboral::create([
            'name'=>'LEY 29944',
            'description'=>'LEY 29944',
            'status'=>'ACTIVO'
        ]);

        Laboral::create([
            'name'=>'LEY 30328',
            'description'=>'LEY 30328',
            'status'=>'ACTIVO'
        ]);

        Laboral::create([
            'name'=>'LEY 30512',
            'description'=>'LEY 30512',
            'status'=>'ACTIVO'
        ]);

    }
}
