<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin

        User::updateOrCreate([
            
            'name' => 'Administrador',
            'ap_paterno' => 'DREA',
            'ap_materno' => 'AYACUCHO',
            'dni' => '12345678',
            'office_id'=>'1',
            'email' => 'admin@drea.com',
            'password' => Hash::make('123'),
            'status' => true,
           
        ]);

        // Create user
        
        User::updateOrCreate([
            
            'name' => 'Jone Doe',
            'ap_paterno' => 'DREA',
            'ap_materno' => 'AYACUCHO',
            'dni' => '12345679',
            'office_id'=>'1',
            'email' => 'user@mail.com',
            'password' => Hash::make('123'),
            'status' => true,
            
        ]);
        Profile::create([
            'user_id' => '1',
            'photo'=>'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=Administrador+DREA',
            'genre'=> 'MASCULINO',
            'department_id' => '5',
            'province_id'=> '501',
            'district_id' => '50101',
            'laboral_id' => '1',
            'pension_id' => '1',
            'position_id' => '1',
            'condition_id' => '1',
            
        ]);
        Profile::create([
            'user_id' => '2',
            'photo'=>'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=Jone+Doe',
            'genre'=> 'MASCULINO',
            'department_id' => '5',
            'province_id'=> '501',
            'district_id' => '50101',
            'laboral_id' => '1',
            'pension_id' => '1',
            'position_id' => '1',
            'condition_id' => '1',
        ]);
    
        /* User::factory()->times(100)->create(); */
    
    }
}
