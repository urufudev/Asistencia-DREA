<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Condition::create([
            'name'=>'CAS - PROGRAMAS',
            'description'=>'CAS - PROGRAMAS',
            'status'=>'ACTIVO'
        ]);
        Condition::create([
                    'name'=>'CAS - SEDE',
                    'description'=>'CAS - SEDE',
                    'status'=>'ACTIVO'
                ]);
        Condition::create([
                    'name'=>'CONTRATADO - CGR',
                    'description'=>'CONTRATADO - CGR',
                    'status'=>'ACTIVO'
                ]);
        Condition::create([
                    'name'=>'CONTRATADO - DESTACADO',
                    'description'=>'CONTRATADO - DESTACADO',
                    'status'=>'ACTIVO'
                ]);
        Condition::create([
                    'name'=>'CONTRATADO - SEDE',
                    'description'=>'CONTRATADO - SEDE',
                    'status'=>'ACTIVO'
                ]);
        Condition::create([
                    'name'=>'CRAEI - CONTRATADO',
                    'description'=>'CRAEI - CONTRATADO',
                    'status'=>'ACTIVO'
                ]);
        Condition::create([
                    'name'=>'CRAEI - NOMBRADO',
                    'description'=>'CRAEI - NOMBRADO',
                    'status'=>'ACTIVO'
                ]);
        Condition::create([
                    'name'=>'DESIGNADO - LRM',
                    'description'=>'DESIGNADO - LRM',
                    'status'=>'ACTIVO'
                ]);
        Condition::create([
                    'name'=>'DESTACADO',
                    'description'=>'DESTACADO',
                    'status'=>'ACTIVO'
                ]);
        Condition::create([
                    'name'=>'ENCARGADO',
                    'description'=>'ENCARGADO',
                    'status'=>'ACTIVO'
                ]);
        Condition::create([
                    'name'=>'FUNCIONARIO',
                    'description'=>'FUNCIONARIO',
                    'status'=>'ACTIVO'
                ]);

        Condition::create([
                    'name'=>'TERCEROS',
                    'description'=>'TERCEROS',
                    'status'=>'ACTIVO'
                ]);


    }
}
