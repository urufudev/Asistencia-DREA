<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::create([
            'name'=>'ÓRGANO DE DIRECCIÓN/SECRETARÍA GENERAL ',
            'description'=>'ÓRGANO DE DIRECCIÓN/SECRETARÍA GENERAL ',
            'status'=>'ACTIVO'
        ]);
        Office::create([
                    'name'=>'OFICINA DE ASESORÍA JURÍDICA ',
                    'description'=>'OFICINA DE ASESORÍA JURÍDICA ',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE TESORERÍA ',
                    'description'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE TESORERÍA ',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE INFRAESTRUCTURA ',
                    'description'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE INFRAESTRUCTURA ',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE CONTROL PATRIMONIAL ',
                    'description'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE CONTROL PATRIMONIAL ',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE CONTABILIDAD ',
                    'description'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE CONTABILIDAD ',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE ABASTECIMIENTO Y SERVICIOS AUXLIARES ',
                    'description'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE ABASTECIMIENTO Y SERVICIOS AUXLIARES ',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN ',
                    'description'=>'OFICINA DE ADMINISTRACIÓN ',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'DIRECCIÓN DE GESTIÓN INSTITUCIONAL ',
                    'description'=>'DIRECCIÓN DE GESTIÓN INSTITUCIONAL ',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'DIRECCIÓN DE GESTIÓN PEDAGÓGICA',
                    'description'=>'DIRECCIÓN DE GESTIÓN PEDAGÓGICA',
                    'status'=>'ACTIVO'
                ]);

        Office::create([
                    'name'=>'ÓRGANO DE CONTROL INSTITUCIONAL ',
                    'description'=>'ÓRGANO DE CONTROL INSTITUCIONAL ',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'ÓRGANO DE DIRECCIÓN ',
                    'description'=>'ÓRGANO DE DIRECCIÓN ',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE PERSONAL',
                    'description'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE PERSONAL',
                    'status'=>'ACTIVO'
                ]);

    }
}
