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
            'name'=>'ÓRGANO DE DIRECCIÓN/SECRETARÍA GENERAL',
            'description'=>'DIR/SG',
            'status'=>'ACTIVO'
        ]);
        Office::create([
                    'name'=>'OFICINA DE ASESORÍA JURÍDICA',
                    'description'=>'OAJ',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE TESORERÍA',
                    'description'=>'OA/TES',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE INFRAESTRUCTURA',
                    'description'=>'OA/INFR',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE CONTROL PATRIMONIAL',
                    'description'=>'OA/PATR',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE CONTABILIDAD',
                    'description'=>'OA/CONT',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE ABASTECIMIENTO Y SERVICIOS AUXLIARES',
                    'description'=>'OA/ABAST',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN',
                    'description'=>'OA',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'DIRECCIÓN DE GESTIÓN INSTITUCIONAL',
                    'description'=>'DGI',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'DIRECCIÓN DE GESTIÓN PEDAGÓGICA',
                    'description'=>'DGP',
                    'status'=>'ACTIVO'
                ]);

        Office::create([
                    'name'=>'ÓRGANO DE CONTROL INSTITUCIONAL',
                    'description'=>'OCI',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'ÓRGANO DE DIRECCIÓN',
                    'description'=>'DIR',
                    'status'=>'ACTIVO'
                ]);
        Office::create([
                    'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE PERSONAL',
                    'description'=>'OA/APER',
                    'status'=>'ACTIVO'
                ]);

    }
}
