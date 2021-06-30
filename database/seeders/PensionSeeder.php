<?php

namespace Database\Seeders;

use App\Models\Pension;
use Illuminate\Database\Seeder;

class PensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pension::create([
            'name'=>'DL 19990',
            'description'=>'DL 19990',
            'status'=>'ACTIVO'
        ]);

        Pension::create([
            'name'=>'DL 25897 - AFP',
            'description'=>'DL 25897 - AFP',
            'status'=>'ACTIVO'
        ]);

        Pension::create([
            'name'=>'DL 20530',
            'description'=>'DL 20530',
            'status'=>'ACTIVO'
        ]);
    }
}
