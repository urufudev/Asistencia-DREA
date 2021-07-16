<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OfficeSeeder::class);
       
        
        
        $this->call(LaboralSeeder::class);
        $this->call(PensionSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(ConditionSeeder::class);
        
        $this->call(EventSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);

        $this->call(UserSeeder::class);
        $this->call(PermissionsSeeder::class);
    }
}
