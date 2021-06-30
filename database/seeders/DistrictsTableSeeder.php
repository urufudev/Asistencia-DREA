<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 10101,
                'name' => 'Chachapoyas',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 10102,
                'name' => 'Asunción',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 10103,
                'name' => 'Balsas',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 10104,
                'name' => 'Cheto',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 10105,
                'name' => 'Chiliquin',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 10106,
                'name' => 'Chuquibamba',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 10107,
                'name' => 'Granada',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10108,
                'name' => 'Huancas',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10109,
                'name' => 'La Jalca',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10110,
                'name' => 'Leimebamba',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 10111,
                'name' => 'Levanto',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 10112,
                'name' => 'Magdalena',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 10113,
                'name' => 'Mariscal Castilla',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 10114,
                'name' => 'Molinopampa',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 10115,
                'name' => 'Montevideo',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 10116,
                'name' => 'Olleros',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 10117,
                'name' => 'Quinjalca',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 10118,
                'name' => 'San Francisco de Daguas',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 10119,
                'name' => 'San Isidro de Maino',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 10120,
                'name' => 'Soloco',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 10121,
                'name' => 'Sonche',
                'province_id' => 101,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 10201,
                'name' => 'Bagua',
                'province_id' => 102,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 10202,
                'name' => 'Aramango',
                'province_id' => 102,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 10203,
                'name' => 'Copallin',
                'province_id' => 102,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 10204,
                'name' => 'El Parco',
                'province_id' => 102,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 10205,
                'name' => 'Imaza',
                'province_id' => 102,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 10206,
                'name' => 'La Peca',
                'province_id' => 102,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 10301,
                'name' => 'Jumbilla',
                'province_id' => 103,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 10302,
                'name' => 'Chisquilla',
                'province_id' => 103,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 10303,
                'name' => 'Churuja',
                'province_id' => 103,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 10304,
                'name' => 'Corosha',
                'province_id' => 103,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 10305,
                'name' => 'Cuispes',
                'province_id' => 103,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 10306,
                'name' => 'Florida',
                'province_id' => 103,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 10307,
                'name' => 'Jazan',
                'province_id' => 103,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 10308,
                'name' => 'Recta',
                'province_id' => 103,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 10309,
                'name' => 'San Carlos',
                'province_id' => 103,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 10310,
                'name' => 'Shipasbamba',
                'province_id' => 103,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 10311,
                'name' => 'Valera',
                'province_id' => 103,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 10312,
                'name' => 'Yambrasbamba',
                'province_id' => 103,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 10401,
                'name' => 'Nieva',
                'province_id' => 104,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 10402,
                'name' => 'El Cenepa',
                'province_id' => 104,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 10403,
                'name' => 'Río Santiago',
                'province_id' => 104,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 10501,
                'name' => 'Lamud',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 10502,
                'name' => 'Camporredondo',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 10503,
                'name' => 'Cocabamba',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 10504,
                'name' => 'Colcamar',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 10505,
                'name' => 'Conila',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 10506,
                'name' => 'Inguilpata',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 10507,
                'name' => 'Longuita',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 10508,
                'name' => 'Lonya Chico',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 10509,
                'name' => 'Luya',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 10510,
                'name' => 'Luya Viejo',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 10511,
                'name' => 'María',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 10512,
                'name' => 'Ocalli',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 10513,
                'name' => 'Ocumal',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 10514,
                'name' => 'Pisuquia',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 10515,
                'name' => 'Providencia',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 10516,
                'name' => 'San Cristóbal',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 10517,
                'name' => 'San Francisco de Yeso',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 10518,
                'name' => 'San Jerónimo',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 10519,
                'name' => 'San Juan de Lopecancha',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 10520,
                'name' => 'Santa Catalina',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 10521,
                'name' => 'Santo Tomas',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 10522,
                'name' => 'Tingo',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 10523,
                'name' => 'Trita',
                'province_id' => 105,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 10601,
                'name' => 'San Nicolás',
                'province_id' => 106,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 10602,
                'name' => 'Chirimoto',
                'province_id' => 106,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 10603,
                'name' => 'Cochamal',
                'province_id' => 106,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 10604,
                'name' => 'Huambo',
                'province_id' => 106,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 10605,
                'name' => 'Limabamba',
                'province_id' => 106,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 10606,
                'name' => 'Longar',
                'province_id' => 106,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 10607,
                'name' => 'Mariscal Benavides',
                'province_id' => 106,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 10608,
                'name' => 'Milpuc',
                'province_id' => 106,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 10609,
                'name' => 'Omia',
                'province_id' => 106,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 10610,
                'name' => 'Santa Rosa',
                'province_id' => 106,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 10611,
                'name' => 'Totora',
                'province_id' => 106,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 10612,
                'name' => 'Vista Alegre',
                'province_id' => 106,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 10701,
                'name' => 'Bagua Grande',
                'province_id' => 107,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 10702,
                'name' => 'Cajaruro',
                'province_id' => 107,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 10703,
                'name' => 'Cumba',
                'province_id' => 107,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 10704,
                'name' => 'El Milagro',
                'province_id' => 107,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 10705,
                'name' => 'Jamalca',
                'province_id' => 107,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 10706,
                'name' => 'Lonya Grande',
                'province_id' => 107,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 10707,
                'name' => 'Yamon',
                'province_id' => 107,
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 20101,
                'name' => 'Huaraz',
                'province_id' => 201,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 20102,
                'name' => 'Cochabamba',
                'province_id' => 201,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 20103,
                'name' => 'Colcabamba',
                'province_id' => 201,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 20104,
                'name' => 'Huanchay',
                'province_id' => 201,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 20105,
                'name' => 'Independencia',
                'province_id' => 201,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 20106,
                'name' => 'Jangas',
                'province_id' => 201,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 20107,
                'name' => 'La Libertad',
                'province_id' => 201,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 20108,
                'name' => 'Olleros',
                'province_id' => 201,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 20109,
                'name' => 'Pampas Grande',
                'province_id' => 201,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 20110,
                'name' => 'Pariacoto',
                'province_id' => 201,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 20111,
                'name' => 'Pira',
                'province_id' => 201,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 20112,
                'name' => 'Tarica',
                'province_id' => 201,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 20201,
                'name' => 'Aija',
                'province_id' => 202,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 20202,
                'name' => 'Coris',
                'province_id' => 202,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 20203,
                'name' => 'Huacllan',
                'province_id' => 202,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 20204,
                'name' => 'La Merced',
                'province_id' => 202,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 20205,
                'name' => 'Succha',
                'province_id' => 202,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 20301,
                'name' => 'Llamellin',
                'province_id' => 203,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 20302,
                'name' => 'Aczo',
                'province_id' => 203,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 20303,
                'name' => 'Chaccho',
                'province_id' => 203,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 20304,
                'name' => 'Chingas',
                'province_id' => 203,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 20305,
                'name' => 'Mirgas',
                'province_id' => 203,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 20306,
                'name' => 'San Juan de Rontoy',
                'province_id' => 203,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 20401,
                'name' => 'Chacas',
                'province_id' => 204,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 20402,
                'name' => 'Acochaca',
                'province_id' => 204,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 20501,
                'name' => 'Chiquian',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 20502,
                'name' => 'Abelardo Pardo Lezameta',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 20503,
                'name' => 'Antonio Raymondi',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 20504,
                'name' => 'Aquia',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 20505,
                'name' => 'Cajacay',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 20506,
                'name' => 'Canis',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 20507,
                'name' => 'Colquioc',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 20508,
                'name' => 'Huallanca',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 20509,
                'name' => 'Huasta',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 20510,
                'name' => 'Huayllacayan',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 20511,
                'name' => 'La Primavera',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 20512,
                'name' => 'Mangas',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 20513,
                'name' => 'Pacllon',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 20514,
                'name' => 'San Miguel de Corpanqui',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 20515,
                'name' => 'Ticllos',
                'province_id' => 205,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 20601,
                'name' => 'Carhuaz',
                'province_id' => 206,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 20602,
                'name' => 'Acopampa',
                'province_id' => 206,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 20603,
                'name' => 'Amashca',
                'province_id' => 206,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 20604,
                'name' => 'Anta',
                'province_id' => 206,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 20605,
                'name' => 'Ataquero',
                'province_id' => 206,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 20606,
                'name' => 'Marcara',
                'province_id' => 206,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 20607,
                'name' => 'Pariahuanca',
                'province_id' => 206,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 20608,
                'name' => 'San Miguel de Aco',
                'province_id' => 206,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 20609,
                'name' => 'Shilla',
                'province_id' => 206,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 20610,
                'name' => 'Tinco',
                'province_id' => 206,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 20611,
                'name' => 'Yungar',
                'province_id' => 206,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 20701,
                'name' => 'San Luis',
                'province_id' => 207,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 20702,
                'name' => 'San Nicolás',
                'province_id' => 207,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 20703,
                'name' => 'Yauya',
                'province_id' => 207,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 20801,
                'name' => 'Casma',
                'province_id' => 208,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 20802,
                'name' => 'Buena Vista Alta',
                'province_id' => 208,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 20803,
                'name' => 'Comandante Noel',
                'province_id' => 208,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 20804,
                'name' => 'Yautan',
                'province_id' => 208,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 20901,
                'name' => 'Corongo',
                'province_id' => 209,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 20902,
                'name' => 'Aco',
                'province_id' => 209,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 20903,
                'name' => 'Bambas',
                'province_id' => 209,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 20904,
                'name' => 'Cusca',
                'province_id' => 209,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 20905,
                'name' => 'La Pampa',
                'province_id' => 209,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 20906,
                'name' => 'Yanac',
                'province_id' => 209,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 20907,
                'name' => 'Yupan',
                'province_id' => 209,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 21001,
                'name' => 'Huari',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 21002,
                'name' => 'Anra',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 21003,
                'name' => 'Cajay',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 21004,
                'name' => 'Chavin de Huantar',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 21005,
                'name' => 'Huacachi',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 21006,
                'name' => 'Huacchis',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 21007,
                'name' => 'Huachis',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 21008,
                'name' => 'Huantar',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 21009,
                'name' => 'Masin',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 21010,
                'name' => 'Paucas',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 21011,
                'name' => 'Ponto',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 21012,
                'name' => 'Rahuapampa',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 21013,
                'name' => 'Rapayan',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 21014,
                'name' => 'San Marcos',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 21015,
                'name' => 'San Pedro de Chana',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 21016,
                'name' => 'Uco',
                'province_id' => 210,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 21101,
                'name' => 'Huarmey',
                'province_id' => 211,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 21102,
                'name' => 'Cochapeti',
                'province_id' => 211,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 21103,
                'name' => 'Culebras',
                'province_id' => 211,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 21104,
                'name' => 'Huayan',
                'province_id' => 211,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 21105,
                'name' => 'Malvas',
                'province_id' => 211,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 21201,
                'name' => 'Caraz',
                'province_id' => 212,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 21202,
                'name' => 'Huallanca',
                'province_id' => 212,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 21203,
                'name' => 'Huata',
                'province_id' => 212,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 21204,
                'name' => 'Huaylas',
                'province_id' => 212,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 21205,
                'name' => 'Mato',
                'province_id' => 212,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 21206,
                'name' => 'Pamparomas',
                'province_id' => 212,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 21207,
                'name' => 'Pueblo Libre',
                'province_id' => 212,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 21208,
                'name' => 'Santa Cruz',
                'province_id' => 212,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 21209,
                'name' => 'Santo Toribio',
                'province_id' => 212,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 21210,
                'name' => 'Yuracmarca',
                'province_id' => 212,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 21301,
                'name' => 'Piscobamba',
                'province_id' => 213,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 21302,
                'name' => 'Casca',
                'province_id' => 213,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 21303,
                'name' => 'Eleazar Guzmán Barron',
                'province_id' => 213,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 21304,
                'name' => 'Fidel Olivas Escudero',
                'province_id' => 213,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 21305,
                'name' => 'Llama',
                'province_id' => 213,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 21306,
                'name' => 'Llumpa',
                'province_id' => 213,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 21307,
                'name' => 'Lucma',
                'province_id' => 213,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 21308,
                'name' => 'Musga',
                'province_id' => 213,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 21401,
                'name' => 'Ocros',
                'province_id' => 214,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 21402,
                'name' => 'Acas',
                'province_id' => 214,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 21403,
                'name' => 'Cajamarquilla',
                'province_id' => 214,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 21404,
                'name' => 'Carhuapampa',
                'province_id' => 214,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 21405,
                'name' => 'Cochas',
                'province_id' => 214,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 21406,
                'name' => 'Congas',
                'province_id' => 214,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 21407,
                'name' => 'Llipa',
                'province_id' => 214,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 21408,
                'name' => 'San Cristóbal de Rajan',
                'province_id' => 214,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 21409,
                'name' => 'San Pedro',
                'province_id' => 214,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 21410,
                'name' => 'Santiago de Chilcas',
                'province_id' => 214,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 21501,
                'name' => 'Cabana',
                'province_id' => 215,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 21502,
                'name' => 'Bolognesi',
                'province_id' => 215,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 21503,
                'name' => 'Conchucos',
                'province_id' => 215,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 21504,
                'name' => 'Huacaschuque',
                'province_id' => 215,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 21505,
                'name' => 'Huandoval',
                'province_id' => 215,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 21506,
                'name' => 'Lacabamba',
                'province_id' => 215,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 21507,
                'name' => 'Llapo',
                'province_id' => 215,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 21508,
                'name' => 'Pallasca',
                'province_id' => 215,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 21509,
                'name' => 'Pampas',
                'province_id' => 215,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 21510,
                'name' => 'Santa Rosa',
                'province_id' => 215,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 21511,
                'name' => 'Tauca',
                'province_id' => 215,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 21601,
                'name' => 'Pomabamba',
                'province_id' => 216,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 21602,
                'name' => 'Huayllan',
                'province_id' => 216,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 21603,
                'name' => 'Parobamba',
                'province_id' => 216,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 21604,
                'name' => 'Quinuabamba',
                'province_id' => 216,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 21701,
                'name' => 'Recuay',
                'province_id' => 217,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 21702,
                'name' => 'Catac',
                'province_id' => 217,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 21703,
                'name' => 'Cotaparaco',
                'province_id' => 217,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 21704,
                'name' => 'Huayllapampa',
                'province_id' => 217,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 21705,
                'name' => 'Llacllin',
                'province_id' => 217,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 21706,
                'name' => 'Marca',
                'province_id' => 217,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 21707,
                'name' => 'Pampas Chico',
                'province_id' => 217,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 21708,
                'name' => 'Pararin',
                'province_id' => 217,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 21709,
                'name' => 'Tapacocha',
                'province_id' => 217,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 21710,
                'name' => 'Ticapampa',
                'province_id' => 217,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 21801,
                'name' => 'Chimbote',
                'province_id' => 218,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 21802,
                'name' => 'Cáceres del Perú',
                'province_id' => 218,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 21803,
                'name' => 'Coishco',
                'province_id' => 218,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 21804,
                'name' => 'Macate',
                'province_id' => 218,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 21805,
                'name' => 'Moro',
                'province_id' => 218,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 21806,
                'name' => 'Nepeña',
                'province_id' => 218,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 21807,
                'name' => 'Samanco',
                'province_id' => 218,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 21808,
                'name' => 'Santa',
                'province_id' => 218,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 21809,
                'name' => 'Nuevo Chimbote',
                'province_id' => 218,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 21901,
                'name' => 'Sihuas',
                'province_id' => 219,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 21902,
                'name' => 'Acobamba',
                'province_id' => 219,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 21903,
                'name' => 'Alfonso Ugarte',
                'province_id' => 219,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 21904,
                'name' => 'Cashapampa',
                'province_id' => 219,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 21905,
                'name' => 'Chingalpo',
                'province_id' => 219,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 21906,
                'name' => 'Huayllabamba',
                'province_id' => 219,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 21907,
                'name' => 'Quiches',
                'province_id' => 219,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 21908,
                'name' => 'Ragash',
                'province_id' => 219,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 21909,
                'name' => 'San Juan',
                'province_id' => 219,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 21910,
                'name' => 'Sicsibamba',
                'province_id' => 219,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 22001,
                'name' => 'Yungay',
                'province_id' => 220,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 22002,
                'name' => 'Cascapara',
                'province_id' => 220,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 22003,
                'name' => 'Mancos',
                'province_id' => 220,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 22004,
                'name' => 'Matacoto',
                'province_id' => 220,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 22005,
                'name' => 'Quillo',
                'province_id' => 220,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 22006,
                'name' => 'Ranrahirca',
                'province_id' => 220,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 22007,
                'name' => 'Shupluy',
                'province_id' => 220,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 22008,
                'name' => 'Yanama',
                'province_id' => 220,
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 30101,
                'name' => 'Abancay',
                'province_id' => 301,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 30102,
                'name' => 'Chacoche',
                'province_id' => 301,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 30103,
                'name' => 'Circa',
                'province_id' => 301,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 30104,
                'name' => 'Curahuasi',
                'province_id' => 301,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 30105,
                'name' => 'Huanipaca',
                'province_id' => 301,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 30106,
                'name' => 'Lambrama',
                'province_id' => 301,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 30107,
                'name' => 'Pichirhua',
                'province_id' => 301,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 30108,
                'name' => 'San Pedro de Cachora',
                'province_id' => 301,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 30109,
                'name' => 'Tamburco',
                'province_id' => 301,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 30201,
                'name' => 'Andahuaylas',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 30202,
                'name' => 'Andarapa',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 30203,
                'name' => 'Chiara',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 30204,
                'name' => 'Huancarama',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 30205,
                'name' => 'Huancaray',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 30206,
                'name' => 'Huayana',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 30207,
                'name' => 'Kishuara',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 30208,
                'name' => 'Pacobamba',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 30209,
                'name' => 'Pacucha',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 30210,
                'name' => 'Pampachiri',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 30211,
                'name' => 'Pomacocha',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 30212,
                'name' => 'San Antonio de Cachi',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 30213,
                'name' => 'San Jerónimo',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 30214,
                'name' => 'San Miguel de Chaccrampa',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 30215,
                'name' => 'Santa María de Chicmo',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 30216,
                'name' => 'Talavera',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 30217,
                'name' => 'Tumay Huaraca',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 30218,
                'name' => 'Turpo',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 30219,
                'name' => 'Kaquiabamba',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 30220,
                'name' => 'José María Arguedas',
                'province_id' => 302,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 30301,
                'name' => 'Antabamba',
                'province_id' => 303,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 30302,
                'name' => 'El Oro',
                'province_id' => 303,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 30303,
                'name' => 'Huaquirca',
                'province_id' => 303,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 30304,
                'name' => 'Juan Espinoza Medrano',
                'province_id' => 303,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 30305,
                'name' => 'Oropesa',
                'province_id' => 303,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 30306,
                'name' => 'Pachaconas',
                'province_id' => 303,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 30307,
                'name' => 'Sabaino',
                'province_id' => 303,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 30401,
                'name' => 'Chalhuanca',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 30402,
                'name' => 'Capaya',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 30403,
                'name' => 'Caraybamba',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 30404,
                'name' => 'Chapimarca',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 30405,
                'name' => 'Colcabamba',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 30406,
                'name' => 'Cotaruse',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 30407,
                'name' => 'Ihuayllo',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 30408,
                'name' => 'Justo Apu Sahuaraura',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 30409,
                'name' => 'Lucre',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 30410,
                'name' => 'Pocohuanca',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 30411,
                'name' => 'San Juan de Chacña',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 30412,
                'name' => 'Sañayca',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 30413,
                'name' => 'Soraya',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 30414,
                'name' => 'Tapairihua',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 30415,
                'name' => 'Tintay',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 30416,
                'name' => 'Toraya',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 30417,
                'name' => 'Yanaca',
                'province_id' => 304,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 30501,
                'name' => 'Tambobamba',
                'province_id' => 305,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 30502,
                'name' => 'Cotabambas',
                'province_id' => 305,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 30503,
                'name' => 'Coyllurqui',
                'province_id' => 305,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 30504,
                'name' => 'Haquira',
                'province_id' => 305,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 30505,
                'name' => 'Mara',
                'province_id' => 305,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 30506,
                'name' => 'Challhuahuacho',
                'province_id' => 305,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 30601,
                'name' => 'Chincheros',
                'province_id' => 306,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 30602,
                'name' => 'Anco_Huallo',
                'province_id' => 306,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 30603,
                'name' => 'Cocharcas',
                'province_id' => 306,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 30604,
                'name' => 'Huaccana',
                'province_id' => 306,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 30605,
                'name' => 'Ocobamba',
                'province_id' => 306,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 30606,
                'name' => 'Ongoy',
                'province_id' => 306,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 30607,
                'name' => 'Uranmarca',
                'province_id' => 306,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 30608,
                'name' => 'Ranracancha',
                'province_id' => 306,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 30609,
                'name' => 'Rocchacc',
                'province_id' => 306,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 30610,
                'name' => 'El Porvenir',
                'province_id' => 306,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 30611,
                'name' => 'Los Chankas',
                'province_id' => 306,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 30701,
                'name' => 'Chuquibambilla',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 30702,
                'name' => 'Curpahuasi',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 30703,
                'name' => 'Gamarra',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 30704,
                'name' => 'Huayllati',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 30705,
                'name' => 'Mamara',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 30706,
                'name' => 'Micaela Bastidas',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 30707,
                'name' => 'Pataypampa',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 30708,
                'name' => 'Progreso',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 30709,
                'name' => 'San Antonio',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 30710,
                'name' => 'Santa Rosa',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 30711,
                'name' => 'Turpay',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 30712,
                'name' => 'Vilcabamba',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 30713,
                'name' => 'Virundo',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 30714,
                'name' => 'Curasco',
                'province_id' => 307,
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 40101,
                'name' => 'Arequipa',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 40102,
                'name' => 'Alto Selva Alegre',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 40103,
                'name' => 'Cayma',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 40104,
                'name' => 'Cerro Colorado',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 40105,
                'name' => 'Characato',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 40106,
                'name' => 'Chiguata',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 40107,
                'name' => 'Jacobo Hunter',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 40108,
                'name' => 'La Joya',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 40109,
                'name' => 'Mariano Melgar',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 40110,
                'name' => 'Miraflores',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 40111,
                'name' => 'Mollebaya',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 40112,
                'name' => 'Paucarpata',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 40113,
                'name' => 'Pocsi',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 40114,
                'name' => 'Polobaya',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 40115,
                'name' => 'Quequeña',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 40116,
                'name' => 'Sabandia',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 40117,
                'name' => 'Sachaca',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 40118,
                'name' => 'San Juan de Siguas',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 40119,
                'name' => 'San Juan de Tarucani',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 40120,
                'name' => 'Santa Isabel de Siguas',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 40121,
                'name' => 'Santa Rita de Siguas',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 40122,
                'name' => 'Socabaya',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 40123,
                'name' => 'Tiabaya',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 40124,
                'name' => 'Uchumayo',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 40125,
                'name' => 'Vitor',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 40126,
                'name' => 'Yanahuara',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 40127,
                'name' => 'Yarabamba',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 40128,
                'name' => 'Yura',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 40129,
                'name' => 'José Luis Bustamante Y Rivero',
                'province_id' => 401,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 40201,
                'name' => 'Camaná',
                'province_id' => 402,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 40202,
                'name' => 'José María Quimper',
                'province_id' => 402,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 40203,
                'name' => 'Mariano Nicolás Valcárcel',
                'province_id' => 402,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 40204,
                'name' => 'Mariscal Cáceres',
                'province_id' => 402,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 40205,
                'name' => 'Nicolás de Pierola',
                'province_id' => 402,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 40206,
                'name' => 'Ocoña',
                'province_id' => 402,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 40207,
                'name' => 'Quilca',
                'province_id' => 402,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 40208,
                'name' => 'Samuel Pastor',
                'province_id' => 402,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 40301,
                'name' => 'Caravelí',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 40302,
                'name' => 'Acarí',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 40303,
                'name' => 'Atico',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 40304,
                'name' => 'Atiquipa',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 40305,
                'name' => 'Bella Unión',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 40306,
                'name' => 'Cahuacho',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 40307,
                'name' => 'Chala',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 40308,
                'name' => 'Chaparra',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 40309,
                'name' => 'Huanuhuanu',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 40310,
                'name' => 'Jaqui',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 40311,
                'name' => 'Lomas',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 40312,
                'name' => 'Quicacha',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 40313,
                'name' => 'Yauca',
                'province_id' => 403,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 40401,
                'name' => 'Aplao',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 40402,
                'name' => 'Andagua',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 40403,
                'name' => 'Ayo',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 40404,
                'name' => 'Chachas',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 40405,
                'name' => 'Chilcaymarca',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 40406,
                'name' => 'Choco',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 40407,
                'name' => 'Huancarqui',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 40408,
                'name' => 'Machaguay',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 40409,
                'name' => 'Orcopampa',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 40410,
                'name' => 'Pampacolca',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 40411,
                'name' => 'Tipan',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 40412,
                'name' => 'Uñon',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 40413,
                'name' => 'Uraca',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 40414,
                'name' => 'Viraco',
                'province_id' => 404,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 40501,
                'name' => 'Chivay',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 40502,
                'name' => 'Achoma',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 40503,
                'name' => 'Cabanaconde',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 40504,
                'name' => 'Callalli',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 40505,
                'name' => 'Caylloma',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 40506,
                'name' => 'Coporaque',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 40507,
                'name' => 'Huambo',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 40508,
                'name' => 'Huanca',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 40509,
                'name' => 'Ichupampa',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 40510,
                'name' => 'Lari',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 40511,
                'name' => 'Lluta',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 40512,
                'name' => 'Maca',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 40513,
                'name' => 'Madrigal',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 40514,
                'name' => 'San Antonio de Chuca',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 40515,
                'name' => 'Sibayo',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 40516,
                'name' => 'Tapay',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 40517,
                'name' => 'Tisco',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 40518,
                'name' => 'Tuti',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 40519,
                'name' => 'Yanque',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 40520,
                'name' => 'Majes',
                'province_id' => 405,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 40601,
                'name' => 'Chuquibamba',
                'province_id' => 406,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 40602,
                'name' => 'Andaray',
                'province_id' => 406,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 40603,
                'name' => 'Cayarani',
                'province_id' => 406,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 40604,
                'name' => 'Chichas',
                'province_id' => 406,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 40605,
                'name' => 'Iray',
                'province_id' => 406,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 40606,
                'name' => 'Río Grande',
                'province_id' => 406,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 40607,
                'name' => 'Salamanca',
                'province_id' => 406,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 40608,
                'name' => 'Yanaquihua',
                'province_id' => 406,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 40701,
                'name' => 'Mollendo',
                'province_id' => 407,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 40702,
                'name' => 'Cocachacra',
                'province_id' => 407,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 40703,
                'name' => 'Dean Valdivia',
                'province_id' => 407,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 40704,
                'name' => 'Islay',
                'province_id' => 407,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 40705,
                'name' => 'Mejia',
                'province_id' => 407,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 40706,
                'name' => 'Punta de Bombón',
                'province_id' => 407,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 40801,
                'name' => 'Cotahuasi',
                'province_id' => 408,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 40802,
                'name' => 'Alca',
                'province_id' => 408,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 40803,
                'name' => 'Charcana',
                'province_id' => 408,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 40804,
                'name' => 'Huaynacotas',
                'province_id' => 408,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 40805,
                'name' => 'Pampamarca',
                'province_id' => 408,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 40806,
                'name' => 'Puyca',
                'province_id' => 408,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 40807,
                'name' => 'Quechualla',
                'province_id' => 408,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 40808,
                'name' => 'Sayla',
                'province_id' => 408,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 40809,
                'name' => 'Tauria',
                'province_id' => 408,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 40810,
                'name' => 'Tomepampa',
                'province_id' => 408,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 40811,
                'name' => 'Toro',
                'province_id' => 408,
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 50101,
                'name' => 'Ayacucho',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 50102,
                'name' => 'Acocro',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 50103,
                'name' => 'Acos Vinchos',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 50104,
                'name' => 'Carmen Alto',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 50105,
                'name' => 'Chiara',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 50106,
                'name' => 'Ocros',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 50107,
                'name' => 'Pacaycasa',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 50108,
                'name' => 'Quinua',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 50109,
                'name' => 'San José de Ticllas',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 50110,
                'name' => 'San Juan Bautista',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 50111,
                'name' => 'Santiago de Pischa',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 50112,
                'name' => 'Socos',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 50113,
                'name' => 'Tambillo',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 50114,
                'name' => 'Vinchos',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 50115,
                'name' => 'Jesús Nazareno',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 50116,
                'name' => 'Andrés Avelino Cáceres Dorregaray',
                'province_id' => 501,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 50201,
                'name' => 'Cangallo',
                'province_id' => 502,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 50202,
                'name' => 'Chuschi',
                'province_id' => 502,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 50203,
                'name' => 'Los Morochucos',
                'province_id' => 502,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 50204,
                'name' => 'María Parado de Bellido',
                'province_id' => 502,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 50205,
                'name' => 'Paras',
                'province_id' => 502,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 50206,
                'name' => 'Totos',
                'province_id' => 502,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 50301,
                'name' => 'Sancos',
                'province_id' => 503,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 50302,
                'name' => 'Carapo',
                'province_id' => 503,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 50303,
                'name' => 'Sacsamarca',
                'province_id' => 503,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 50304,
                'name' => 'Santiago de Lucanamarca',
                'province_id' => 503,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 50401,
                'name' => 'Huanta',
                'province_id' => 504,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 50402,
                'name' => 'Ayahuanco',
                'province_id' => 504,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 50403,
                'name' => 'Huamanguilla',
                'province_id' => 504,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 50404,
                'name' => 'Iguain',
                'province_id' => 504,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 50405,
                'name' => 'Luricocha',
                'province_id' => 504,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 50406,
                'name' => 'Santillana',
                'province_id' => 504,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 50407,
                'name' => 'Sivia',
                'province_id' => 504,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 50408,
                'name' => 'Llochegua',
                'province_id' => 504,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 50409,
                'name' => 'Canayre',
                'province_id' => 504,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 50410,
                'name' => 'Uchuraccay',
                'province_id' => 504,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 50411,
                'name' => 'Pucacolpa',
                'province_id' => 504,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 50412,
                'name' => 'Chaca',
                'province_id' => 504,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 50501,
                'name' => 'San Miguel',
                'province_id' => 505,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 50502,
                'name' => 'Anco',
                'province_id' => 505,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 50503,
                'name' => 'Ayna',
                'province_id' => 505,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 50504,
                'name' => 'Chilcas',
                'province_id' => 505,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 50505,
                'name' => 'Chungui',
                'province_id' => 505,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 50506,
                'name' => 'Luis Carranza',
                'province_id' => 505,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 50507,
                'name' => 'Santa Rosa',
                'province_id' => 505,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 50508,
                'name' => 'Tambo',
                'province_id' => 505,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 50509,
                'name' => 'Samugari',
                'province_id' => 505,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 50510,
                'name' => 'Anchihuay',
                'province_id' => 505,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 50511,
                'name' => 'Oronccoy',
                'province_id' => 505,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 50601,
                'name' => 'Puquio',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 50602,
                'name' => 'Aucara',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 50603,
                'name' => 'Cabana',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 50604,
                'name' => 'Carmen Salcedo',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 50605,
                'name' => 'Chaviña',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 50606,
                'name' => 'Chipao',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 50607,
                'name' => 'Huac-Huas',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 50608,
                'name' => 'Laramate',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 50609,
                'name' => 'Leoncio Prado',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 50610,
                'name' => 'Llauta',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 50611,
                'name' => 'Lucanas',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 50612,
                'name' => 'Ocaña',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 50613,
                'name' => 'Otoca',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 50614,
                'name' => 'Saisa',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 50615,
                'name' => 'San Cristóbal',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 50616,
                'name' => 'San Juan',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 50617,
                'name' => 'San Pedro',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 50618,
                'name' => 'San Pedro de Palco',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 50619,
                'name' => 'Sancos',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 50620,
                'name' => 'Santa Ana de Huaycahuacho',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 50621,
                'name' => 'Santa Lucia',
                'province_id' => 506,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 50701,
                'name' => 'Coracora',
                'province_id' => 507,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 50702,
                'name' => 'Chumpi',
                'province_id' => 507,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 50703,
                'name' => 'Coronel Castañeda',
                'province_id' => 507,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 50704,
                'name' => 'Pacapausa',
                'province_id' => 507,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 50705,
                'name' => 'Pullo',
                'province_id' => 507,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 50706,
                'name' => 'Puyusca',
                'province_id' => 507,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 50707,
                'name' => 'San Francisco de Ravacayco',
                'province_id' => 507,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 50708,
                'name' => 'Upahuacho',
                'province_id' => 507,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 50801,
                'name' => 'Pausa',
                'province_id' => 508,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 50802,
                'name' => 'Colta',
                'province_id' => 508,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 50803,
                'name' => 'Corculla',
                'province_id' => 508,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 50804,
                'name' => 'Lampa',
                'province_id' => 508,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 50805,
                'name' => 'Marcabamba',
                'province_id' => 508,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 50806,
                'name' => 'Oyolo',
                'province_id' => 508,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 50807,
                'name' => 'Pararca',
                'province_id' => 508,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 50808,
                'name' => 'San Javier de Alpabamba',
                'province_id' => 508,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 50809,
                'name' => 'San José de Ushua',
                'province_id' => 508,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 50810,
                'name' => 'Sara Sara',
                'province_id' => 508,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 50901,
                'name' => 'Querobamba',
                'province_id' => 509,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 50902,
                'name' => 'Belén',
                'province_id' => 509,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 50903,
                'name' => 'Chalcos',
                'province_id' => 509,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 50904,
                'name' => 'Chilcayoc',
                'province_id' => 509,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 50905,
                'name' => 'Huacaña',
                'province_id' => 509,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 50906,
                'name' => 'Morcolla',
                'province_id' => 509,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 50907,
                'name' => 'Paico',
                'province_id' => 509,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 50908,
                'name' => 'San Pedro de Larcay',
                'province_id' => 509,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 50909,
                'name' => 'San Salvador de Quije',
                'province_id' => 509,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 50910,
                'name' => 'Santiago de Paucaray',
                'province_id' => 509,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 50911,
                'name' => 'Soras',
                'province_id' => 509,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 51001,
                'name' => 'Huancapi',
                'province_id' => 510,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 51002,
                'name' => 'Alcamenca',
                'province_id' => 510,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 51003,
                'name' => 'Apongo',
                'province_id' => 510,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 51004,
                'name' => 'Asquipata',
                'province_id' => 510,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 51005,
                'name' => 'Canaria',
                'province_id' => 510,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 51006,
                'name' => 'Cayara',
                'province_id' => 510,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 51007,
                'name' => 'Colca',
                'province_id' => 510,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 51008,
                'name' => 'Huamanquiquia',
                'province_id' => 510,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51009,
                'name' => 'Huancaraylla',
                'province_id' => 510,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 51010,
                'name' => 'Hualla',
                'province_id' => 510,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 51011,
                'name' => 'Sarhua',
                'province_id' => 510,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 51012,
                'name' => 'Vilcanchos',
                'province_id' => 510,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 51101,
                'name' => 'Vilcas Huaman',
                'province_id' => 511,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 51102,
                'name' => 'Accomarca',
                'province_id' => 511,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 51103,
                'name' => 'Carhuanca',
                'province_id' => 511,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 51104,
                'name' => 'Concepción',
                'province_id' => 511,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 51105,
                'name' => 'Huambalpa',
                'province_id' => 511,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 51106,
                'name' => 'Independencia',
                'province_id' => 511,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 51107,
                'name' => 'Saurama',
                'province_id' => 511,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 51108,
                'name' => 'Vischongo',
                'province_id' => 511,
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 60101,
                'name' => 'Cajamarca',
                'province_id' => 601,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 60102,
                'name' => 'Asunción',
                'province_id' => 601,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 60103,
                'name' => 'Chetilla',
                'province_id' => 601,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 60104,
                'name' => 'Cospan',
                'province_id' => 601,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 60105,
                'name' => 'Encañada',
                'province_id' => 601,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 60106,
                'name' => 'Jesús',
                'province_id' => 601,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 60107,
                'name' => 'Llacanora',
                'province_id' => 601,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 60108,
                'name' => 'Los Baños del Inca',
                'province_id' => 601,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 60109,
                'name' => 'Magdalena',
                'province_id' => 601,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 60110,
                'name' => 'Matara',
                'province_id' => 601,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 60111,
                'name' => 'Namora',
                'province_id' => 601,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 60112,
                'name' => 'San Juan',
                'province_id' => 601,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 60201,
                'name' => 'Cajabamba',
                'province_id' => 602,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 60202,
                'name' => 'Cachachi',
                'province_id' => 602,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 60203,
                'name' => 'Condebamba',
                'province_id' => 602,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 60204,
                'name' => 'Sitacocha',
                'province_id' => 602,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 60301,
                'name' => 'Celendín',
                'province_id' => 603,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 60302,
                'name' => 'Chumuch',
                'province_id' => 603,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 60303,
                'name' => 'Cortegana',
                'province_id' => 603,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 60304,
                'name' => 'Huasmin',
                'province_id' => 603,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 60305,
                'name' => 'Jorge Chávez',
                'province_id' => 603,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 60306,
                'name' => 'José Gálvez',
                'province_id' => 603,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 60307,
                'name' => 'Miguel Iglesias',
                'province_id' => 603,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 60308,
                'name' => 'Oxamarca',
                'province_id' => 603,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 60309,
                'name' => 'Sorochuco',
                'province_id' => 603,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 60310,
                'name' => 'Sucre',
                'province_id' => 603,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 60311,
                'name' => 'Utco',
                'province_id' => 603,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 60312,
                'name' => 'La Libertad de Pallan',
                'province_id' => 603,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 60401,
                'name' => 'Chota',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 60402,
                'name' => 'Anguia',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 60403,
                'name' => 'Chadin',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 60404,
                'name' => 'Chiguirip',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 60405,
                'name' => 'Chimban',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 60406,
                'name' => 'Choropampa',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 60407,
                'name' => 'Cochabamba',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 60408,
                'name' => 'Conchan',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 60409,
                'name' => 'Huambos',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 60410,
                'name' => 'Lajas',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 60411,
                'name' => 'Llama',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 60412,
                'name' => 'Miracosta',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 60413,
                'name' => 'Paccha',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 60414,
                'name' => 'Pion',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 60415,
                'name' => 'Querocoto',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 60416,
                'name' => 'San Juan de Licupis',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 60417,
                'name' => 'Tacabamba',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 60418,
                'name' => 'Tocmoche',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 60419,
                'name' => 'Chalamarca',
                'province_id' => 604,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 60501,
                'name' => 'Contumaza',
                'province_id' => 605,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 60502,
                'name' => 'Chilete',
                'province_id' => 605,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 60503,
                'name' => 'Cupisnique',
                'province_id' => 605,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 60504,
                'name' => 'Guzmango',
                'province_id' => 605,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 60505,
                'name' => 'San Benito',
                'province_id' => 605,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 60506,
                'name' => 'Santa Cruz de Toledo',
                'province_id' => 605,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 60507,
                'name' => 'Tantarica',
                'province_id' => 605,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 60508,
                'name' => 'Yonan',
                'province_id' => 605,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 60601,
                'name' => 'Cutervo',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 60602,
                'name' => 'Callayuc',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 60603,
                'name' => 'Choros',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 60604,
                'name' => 'Cujillo',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 60605,
                'name' => 'La Ramada',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 60606,
                'name' => 'Pimpingos',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 60607,
                'name' => 'Querocotillo',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 60608,
                'name' => 'San Andrés de Cutervo',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 60609,
                'name' => 'San Juan de Cutervo',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 60610,
                'name' => 'San Luis de Lucma',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 60611,
                'name' => 'Santa Cruz',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 60612,
                'name' => 'Santo Domingo de la Capilla',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 60613,
                'name' => 'Santo Tomas',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 60614,
                'name' => 'Socota',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 60615,
                'name' => 'Toribio Casanova',
                'province_id' => 606,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 60701,
                'name' => 'Bambamarca',
                'province_id' => 607,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 60702,
                'name' => 'Chugur',
                'province_id' => 607,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 60703,
                'name' => 'Hualgayoc',
                'province_id' => 607,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 60801,
                'name' => 'Jaén',
                'province_id' => 608,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 60802,
                'name' => 'Bellavista',
                'province_id' => 608,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 60803,
                'name' => 'Chontali',
                'province_id' => 608,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 60804,
                'name' => 'Colasay',
                'province_id' => 608,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 60805,
                'name' => 'Huabal',
                'province_id' => 608,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 60806,
                'name' => 'Las Pirias',
                'province_id' => 608,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 60807,
                'name' => 'Pomahuaca',
                'province_id' => 608,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 60808,
                'name' => 'Pucara',
                'province_id' => 608,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 60809,
                'name' => 'Sallique',
                'province_id' => 608,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 60810,
                'name' => 'San Felipe',
                'province_id' => 608,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 60811,
                'name' => 'San José del Alto',
                'province_id' => 608,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 60812,
                'name' => 'Santa Rosa',
                'province_id' => 608,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 60901,
                'name' => 'San Ignacio',
                'province_id' => 609,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 60902,
                'name' => 'Chirinos',
                'province_id' => 609,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 60903,
                'name' => 'Huarango',
                'province_id' => 609,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 60904,
                'name' => 'La Coipa',
                'province_id' => 609,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 60905,
                'name' => 'Namballe',
                'province_id' => 609,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 60906,
                'name' => 'San José de Lourdes',
                'province_id' => 609,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 60907,
                'name' => 'Tabaconas',
                'province_id' => 609,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 61001,
                'name' => 'Pedro Gálvez',
                'province_id' => 610,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 61002,
                'name' => 'Chancay',
                'province_id' => 610,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 61003,
                'name' => 'Eduardo Villanueva',
                'province_id' => 610,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 61004,
                'name' => 'Gregorio Pita',
                'province_id' => 610,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 61005,
                'name' => 'Ichocan',
                'province_id' => 610,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 61006,
                'name' => 'José Manuel Quiroz',
                'province_id' => 610,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 61007,
                'name' => 'José Sabogal',
                'province_id' => 610,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 61101,
                'name' => 'San Miguel',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 61102,
                'name' => 'Bolívar',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 61103,
                'name' => 'Calquis',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 61104,
                'name' => 'Catilluc',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 61105,
                'name' => 'El Prado',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 61106,
                'name' => 'La Florida',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 61107,
                'name' => 'Llapa',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 61108,
                'name' => 'Nanchoc',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 61109,
                'name' => 'Niepos',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 61110,
                'name' => 'San Gregorio',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 61111,
                'name' => 'San Silvestre de Cochan',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 61112,
                'name' => 'Tongod',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 61113,
                'name' => 'Unión Agua Blanca',
                'province_id' => 611,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 61201,
                'name' => 'San Pablo',
                'province_id' => 612,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 61202,
                'name' => 'San Bernardino',
                'province_id' => 612,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 61203,
                'name' => 'San Luis',
                'province_id' => 612,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 61204,
                'name' => 'Tumbaden',
                'province_id' => 612,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 61301,
                'name' => 'Santa Cruz',
                'province_id' => 613,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 61302,
                'name' => 'Andabamba',
                'province_id' => 613,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 61303,
                'name' => 'Catache',
                'province_id' => 613,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 61304,
                'name' => 'Chancaybaños',
                'province_id' => 613,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 61305,
                'name' => 'La Esperanza',
                'province_id' => 613,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 61306,
                'name' => 'Ninabamba',
                'province_id' => 613,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 61307,
                'name' => 'Pulan',
                'province_id' => 613,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 61308,
                'name' => 'Saucepampa',
                'province_id' => 613,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 61309,
                'name' => 'Sexi',
                'province_id' => 613,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 61310,
                'name' => 'Uticyacu',
                'province_id' => 613,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 61311,
                'name' => 'Yauyucan',
                'province_id' => 613,
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 70101,
                'name' => 'Callao',
                'province_id' => 701,
                'department_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 70102,
                'name' => 'Bellavista',
                'province_id' => 701,
                'department_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 70103,
                'name' => 'Carmen de la Legua Reynoso',
                'province_id' => 701,
                'department_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 70104,
                'name' => 'La Perla',
                'province_id' => 701,
                'department_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 70105,
                'name' => 'La Punta',
                'province_id' => 701,
                'department_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 70106,
                'name' => 'Ventanilla',
                'province_id' => 701,
                'department_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 70107,
                'name' => 'Mi Perú',
                'province_id' => 701,
                'department_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 80101,
                'name' => 'Cusco',
                'province_id' => 801,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 80102,
                'name' => 'Ccorca',
                'province_id' => 801,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 80103,
                'name' => 'Poroy',
                'province_id' => 801,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 80104,
                'name' => 'San Jerónimo',
                'province_id' => 801,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 80105,
                'name' => 'San Sebastian',
                'province_id' => 801,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 80106,
                'name' => 'Santiago',
                'province_id' => 801,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 80107,
                'name' => 'Saylla',
                'province_id' => 801,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 80108,
                'name' => 'Wanchaq',
                'province_id' => 801,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 80201,
                'name' => 'Acomayo',
                'province_id' => 802,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 80202,
                'name' => 'Acopia',
                'province_id' => 802,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 80203,
                'name' => 'Acos',
                'province_id' => 802,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 80204,
                'name' => 'Mosoc Llacta',
                'province_id' => 802,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 80205,
                'name' => 'Pomacanchi',
                'province_id' => 802,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 80206,
                'name' => 'Rondocan',
                'province_id' => 802,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 80207,
                'name' => 'Sangarara',
                'province_id' => 802,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 80301,
                'name' => 'Anta',
                'province_id' => 803,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 80302,
                'name' => 'Ancahuasi',
                'province_id' => 803,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 80303,
                'name' => 'Cachimayo',
                'province_id' => 803,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 80304,
                'name' => 'Chinchaypujio',
                'province_id' => 803,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 80305,
                'name' => 'Huarocondo',
                'province_id' => 803,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 80306,
                'name' => 'Limatambo',
                'province_id' => 803,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 80307,
                'name' => 'Mollepata',
                'province_id' => 803,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 80308,
                'name' => 'Pucyura',
                'province_id' => 803,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 80309,
                'name' => 'Zurite',
                'province_id' => 803,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 80401,
                'name' => 'Calca',
                'province_id' => 804,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 80402,
                'name' => 'Coya',
                'province_id' => 804,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 80403,
                'name' => 'Lamay',
                'province_id' => 804,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 80404,
                'name' => 'Lares',
                'province_id' => 804,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 80405,
                'name' => 'Pisac',
                'province_id' => 804,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 80406,
                'name' => 'San Salvador',
                'province_id' => 804,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 80407,
                'name' => 'Taray',
                'province_id' => 804,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 80408,
                'name' => 'Yanatile',
                'province_id' => 804,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 80501,
                'name' => 'Yanaoca',
                'province_id' => 805,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 80502,
                'name' => 'Checca',
                'province_id' => 805,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 80503,
                'name' => 'Kunturkanki',
                'province_id' => 805,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 80504,
                'name' => 'Langui',
                'province_id' => 805,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 80505,
                'name' => 'Layo',
                'province_id' => 805,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 80506,
                'name' => 'Pampamarca',
                'province_id' => 805,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 80507,
                'name' => 'Quehue',
                'province_id' => 805,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 80508,
                'name' => 'Tupac Amaru',
                'province_id' => 805,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 80601,
                'name' => 'Sicuani',
                'province_id' => 806,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 80602,
                'name' => 'Checacupe',
                'province_id' => 806,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 80603,
                'name' => 'Combapata',
                'province_id' => 806,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 80604,
                'name' => 'Marangani',
                'province_id' => 806,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 80605,
                'name' => 'Pitumarca',
                'province_id' => 806,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 80606,
                'name' => 'San Pablo',
                'province_id' => 806,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 80607,
                'name' => 'San Pedro',
                'province_id' => 806,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 80608,
                'name' => 'Tinta',
                'province_id' => 806,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 80701,
                'name' => 'Santo Tomas',
                'province_id' => 807,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 80702,
                'name' => 'Capacmarca',
                'province_id' => 807,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 80703,
                'name' => 'Chamaca',
                'province_id' => 807,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 80704,
                'name' => 'Colquemarca',
                'province_id' => 807,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 80705,
                'name' => 'Livitaca',
                'province_id' => 807,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 80706,
                'name' => 'Llusco',
                'province_id' => 807,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 80707,
                'name' => 'Quiñota',
                'province_id' => 807,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 80708,
                'name' => 'Velille',
                'province_id' => 807,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 80801,
                'name' => 'Espinar',
                'province_id' => 808,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 80802,
                'name' => 'Condoroma',
                'province_id' => 808,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 80803,
                'name' => 'Coporaque',
                'province_id' => 808,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 80804,
                'name' => 'Ocoruro',
                'province_id' => 808,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 80805,
                'name' => 'Pallpata',
                'province_id' => 808,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 80806,
                'name' => 'Pichigua',
                'province_id' => 808,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 80807,
                'name' => 'Suyckutambo',
                'province_id' => 808,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 80808,
                'name' => 'Alto Pichigua',
                'province_id' => 808,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 80901,
                'name' => 'Santa Ana',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 80902,
                'name' => 'Echarate',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 80903,
                'name' => 'Huayopata',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 80904,
                'name' => 'Maranura',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 80905,
                'name' => 'Ocobamba',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 80906,
                'name' => 'Quellouno',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 80907,
                'name' => 'Kimbiri',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 80908,
                'name' => 'Santa Teresa',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 80909,
                'name' => 'Vilcabamba',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 80910,
                'name' => 'Pichari',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 80911,
                'name' => 'Inkawasi',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 80912,
                'name' => 'Villa Virgen',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 80913,
                'name' => 'Villa Kintiarina',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 80914,
                'name' => 'Megantoni',
                'province_id' => 809,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 81001,
                'name' => 'Paruro',
                'province_id' => 810,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 81002,
                'name' => 'Accha',
                'province_id' => 810,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 81003,
                'name' => 'Ccapi',
                'province_id' => 810,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 81004,
                'name' => 'Colcha',
                'province_id' => 810,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 81005,
                'name' => 'Huanoquite',
                'province_id' => 810,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 81006,
                'name' => 'Omachaç',
                'province_id' => 810,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 81007,
                'name' => 'Paccaritambo',
                'province_id' => 810,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 81008,
                'name' => 'Pillpinto',
                'province_id' => 810,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 81009,
                'name' => 'Yaurisque',
                'province_id' => 810,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 81101,
                'name' => 'Paucartambo',
                'province_id' => 811,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 81102,
                'name' => 'Caicay',
                'province_id' => 811,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 81103,
                'name' => 'Challabamba',
                'province_id' => 811,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 81104,
                'name' => 'Colquepata',
                'province_id' => 811,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 81105,
                'name' => 'Huancarani',
                'province_id' => 811,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 81106,
                'name' => 'Kosñipata',
                'province_id' => 811,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 81201,
                'name' => 'Urcos',
                'province_id' => 812,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 81202,
                'name' => 'Andahuaylillas',
                'province_id' => 812,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 81203,
                'name' => 'Camanti',
                'province_id' => 812,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 81204,
                'name' => 'Ccarhuayo',
                'province_id' => 812,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 81205,
                'name' => 'Ccatca',
                'province_id' => 812,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 81206,
                'name' => 'Cusipata',
                'province_id' => 812,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 81207,
                'name' => 'Huaro',
                'province_id' => 812,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 81208,
                'name' => 'Lucre',
                'province_id' => 812,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 81209,
                'name' => 'Marcapata',
                'province_id' => 812,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 81210,
                'name' => 'Ocongate',
                'province_id' => 812,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 81211,
                'name' => 'Oropesa',
                'province_id' => 812,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 81212,
                'name' => 'Quiquijana',
                'province_id' => 812,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 81301,
                'name' => 'Urubamba',
                'province_id' => 813,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 81302,
                'name' => 'Chinchero',
                'province_id' => 813,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 81303,
                'name' => 'Huayllabamba',
                'province_id' => 813,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 81304,
                'name' => 'Machupicchu',
                'province_id' => 813,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 81305,
                'name' => 'Maras',
                'province_id' => 813,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 81306,
                'name' => 'Ollantaytambo',
                'province_id' => 813,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 81307,
                'name' => 'Yucay',
                'province_id' => 813,
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 90101,
                'name' => 'Huancavelica',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 90102,
                'name' => 'Acobambilla',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 90103,
                'name' => 'Acoria',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 90104,
                'name' => 'Conayca',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 90105,
                'name' => 'Cuenca',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 90106,
                'name' => 'Huachocolpa',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 90107,
                'name' => 'Huayllahuara',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 90108,
                'name' => 'Izcuchaca',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 90109,
                'name' => 'Laria',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 90110,
                'name' => 'Manta',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 90111,
                'name' => 'Mariscal Cáceres',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 90112,
                'name' => 'Moya',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 90113,
                'name' => 'Nuevo Occoro',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 90114,
                'name' => 'Palca',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 90115,
                'name' => 'Pilchaca',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 90116,
                'name' => 'Vilca',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 90117,
                'name' => 'Yauli',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 90118,
                'name' => 'Ascensión',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 90119,
                'name' => 'Huando',
                'province_id' => 901,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 90201,
                'name' => 'Acobamba',
                'province_id' => 902,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 90202,
                'name' => 'Andabamba',
                'province_id' => 902,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 90203,
                'name' => 'Anta',
                'province_id' => 902,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 90204,
                'name' => 'Caja',
                'province_id' => 902,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 90205,
                'name' => 'Marcas',
                'province_id' => 902,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 90206,
                'name' => 'Paucara',
                'province_id' => 902,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 90207,
                'name' => 'Pomacocha',
                'province_id' => 902,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 90208,
                'name' => 'Rosario',
                'province_id' => 902,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 90301,
                'name' => 'Lircay',
                'province_id' => 903,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 90302,
                'name' => 'Anchonga',
                'province_id' => 903,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 90303,
                'name' => 'Callanmarca',
                'province_id' => 903,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 90304,
                'name' => 'Ccochaccasa',
                'province_id' => 903,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 90305,
                'name' => 'Chincho',
                'province_id' => 903,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 90306,
                'name' => 'Congalla',
                'province_id' => 903,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 90307,
                'name' => 'Huanca-Huanca',
                'province_id' => 903,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 90308,
                'name' => 'Huayllay Grande',
                'province_id' => 903,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 90309,
                'name' => 'Julcamarca',
                'province_id' => 903,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 90310,
                'name' => 'San Antonio de Antaparco',
                'province_id' => 903,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 90311,
                'name' => 'Santo Tomas de Pata',
                'province_id' => 903,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 90312,
                'name' => 'Secclla',
                'province_id' => 903,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 90401,
                'name' => 'Castrovirreyna',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 90402,
                'name' => 'Arma',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 90403,
                'name' => 'Aurahua',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 90404,
                'name' => 'Capillas',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 90405,
                'name' => 'Chupamarca',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 90406,
                'name' => 'Cocas',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 90407,
                'name' => 'Huachos',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 90408,
                'name' => 'Huamatambo',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 90409,
                'name' => 'Mollepampa',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 90410,
                'name' => 'San Juan',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 90411,
                'name' => 'Santa Ana',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 90412,
                'name' => 'Tantara',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 90413,
                'name' => 'Ticrapo',
                'province_id' => 904,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 90501,
                'name' => 'Churcampa',
                'province_id' => 905,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 90502,
                'name' => 'Anco',
                'province_id' => 905,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 90503,
                'name' => 'Chinchihuasi',
                'province_id' => 905,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 90504,
                'name' => 'El Carmen',
                'province_id' => 905,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 90505,
                'name' => 'La Merced',
                'province_id' => 905,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 90506,
                'name' => 'Locroja',
                'province_id' => 905,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 90507,
                'name' => 'Paucarbamba',
                'province_id' => 905,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 90508,
                'name' => 'San Miguel de Mayocc',
                'province_id' => 905,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 90509,
                'name' => 'San Pedro de Coris',
                'province_id' => 905,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 90510,
                'name' => 'Pachamarca',
                'province_id' => 905,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 90511,
                'name' => 'Cosme',
                'province_id' => 905,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 90601,
                'name' => 'Huaytara',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 90602,
                'name' => 'Ayavi',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 90603,
                'name' => 'Córdova',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 90604,
                'name' => 'Huayacundo Arma',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 90605,
                'name' => 'Laramarca',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 90606,
                'name' => 'Ocoyo',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 90607,
                'name' => 'Pilpichaca',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 90608,
                'name' => 'Querco',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 90609,
                'name' => 'Quito-Arma',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 90610,
                'name' => 'San Antonio de Cusicancha',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 90611,
                'name' => 'San Francisco de Sangayaico',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 90612,
                'name' => 'San Isidro',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 90613,
                'name' => 'Santiago de Chocorvos',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 90614,
                'name' => 'Santiago de Quirahuara',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 90615,
                'name' => 'Santo Domingo de Capillas',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 90616,
                'name' => 'Tambo',
                'province_id' => 906,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 90701,
                'name' => 'Pampas',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 90702,
                'name' => 'Acostambo',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 90703,
                'name' => 'Acraquia',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 90704,
                'name' => 'Ahuaycha',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 90705,
                'name' => 'Colcabamba',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 90706,
                'name' => 'Daniel Hernández',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 90707,
                'name' => 'Huachocolpa',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 90709,
                'name' => 'Huaribamba',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 90710,
                'name' => 'Ñahuimpuquio',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 90711,
                'name' => 'Pazos',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 90713,
                'name' => 'Quishuar',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 90714,
                'name' => 'Salcabamba',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 90715,
                'name' => 'Salcahuasi',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 90716,
                'name' => 'San Marcos de Rocchac',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 90717,
                'name' => 'Surcubamba',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 90718,
                'name' => 'Tintay Puncu',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 90719,
                'name' => 'Quichuas',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 90720,
                'name' => 'Andaymarca',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 90721,
                'name' => 'Roble',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 90722,
                'name' => 'Pichos',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 90723,
                'name' => 'Santiago de Tucuma',
                'province_id' => 907,
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 100101,
                'name' => 'Huanuco',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 100102,
                'name' => 'Amarilis',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 100103,
                'name' => 'Chinchao',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 100104,
                'name' => 'Churubamba',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 100105,
                'name' => 'Margos',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 100106,
            'name' => 'Quisqui (Kichki)',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 100107,
                'name' => 'San Francisco de Cayran',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 100108,
                'name' => 'San Pedro de Chaulan',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 100109,
                'name' => 'Santa María del Valle',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 100110,
                'name' => 'Yarumayo',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 100111,
                'name' => 'Pillco Marca',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 100112,
                'name' => 'Yacus',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 100113,
                'name' => 'San Pablo de Pillao',
                'province_id' => 1001,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 100201,
                'name' => 'Ambo',
                'province_id' => 1002,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 100202,
                'name' => 'Cayna',
                'province_id' => 1002,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 100203,
                'name' => 'Colpas',
                'province_id' => 1002,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 100204,
                'name' => 'Conchamarca',
                'province_id' => 1002,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 100205,
                'name' => 'Huacar',
                'province_id' => 1002,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 100206,
                'name' => 'San Francisco',
                'province_id' => 1002,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 100207,
                'name' => 'San Rafael',
                'province_id' => 1002,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 100208,
                'name' => 'Tomay Kichwa',
                'province_id' => 1002,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 100301,
                'name' => 'La Unión',
                'province_id' => 1003,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 100307,
                'name' => 'Chuquis',
                'province_id' => 1003,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 100311,
                'name' => 'Marías',
                'province_id' => 1003,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 100313,
                'name' => 'Pachas',
                'province_id' => 1003,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 100316,
                'name' => 'Quivilla',
                'province_id' => 1003,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 100317,
                'name' => 'Ripan',
                'province_id' => 1003,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 100321,
                'name' => 'Shunqui',
                'province_id' => 1003,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 100322,
                'name' => 'Sillapata',
                'province_id' => 1003,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 100323,
                'name' => 'Yanas',
                'province_id' => 1003,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 100401,
                'name' => 'Huacaybamba',
                'province_id' => 1004,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 100402,
                'name' => 'Canchabamba',
                'province_id' => 1004,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 100403,
                'name' => 'Cochabamba',
                'province_id' => 1004,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 100404,
                'name' => 'Pinra',
                'province_id' => 1004,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 100501,
                'name' => 'Llata',
                'province_id' => 1005,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 100502,
                'name' => 'Arancay',
                'province_id' => 1005,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 100503,
                'name' => 'Chavín de Pariarca',
                'province_id' => 1005,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 100504,
                'name' => 'Jacas Grande',
                'province_id' => 1005,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 100505,
                'name' => 'Jircan',
                'province_id' => 1005,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 100506,
                'name' => 'Miraflores',
                'province_id' => 1005,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 100507,
                'name' => 'Monzón',
                'province_id' => 1005,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 100508,
                'name' => 'Punchao',
                'province_id' => 1005,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 100509,
                'name' => 'Puños',
                'province_id' => 1005,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 100510,
                'name' => 'Singa',
                'province_id' => 1005,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 100511,
                'name' => 'Tantamayo',
                'province_id' => 1005,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 100601,
                'name' => 'Rupa-Rupa',
                'province_id' => 1006,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 100602,
                'name' => 'Daniel Alomía Robles',
                'province_id' => 1006,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 100603,
                'name' => 'Hermílio Valdizan',
                'province_id' => 1006,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 100604,
                'name' => 'José Crespo y Castillo',
                'province_id' => 1006,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 100605,
                'name' => 'Luyando',
                'province_id' => 1006,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 100606,
                'name' => 'Mariano Damaso Beraun',
                'province_id' => 1006,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 100607,
                'name' => 'Pucayacu',
                'province_id' => 1006,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 100608,
                'name' => 'Castillo Grande',
                'province_id' => 1006,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 100609,
                'name' => 'Pueblo Nuevo',
                'province_id' => 1006,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 100610,
                'name' => 'Santo Domingo de Anda',
                'province_id' => 1006,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 100701,
                'name' => 'Huacrachuco',
                'province_id' => 1007,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 100702,
                'name' => 'Cholon',
                'province_id' => 1007,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 100703,
                'name' => 'San Buenaventura',
                'province_id' => 1007,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 100704,
                'name' => 'La Morada',
                'province_id' => 1007,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 100705,
                'name' => 'Santa Rosa de Alto Yanajanca',
                'province_id' => 1007,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 100801,
                'name' => 'Panao',
                'province_id' => 1008,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 100802,
                'name' => 'Chaglla',
                'province_id' => 1008,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 100803,
                'name' => 'Molino',
                'province_id' => 1008,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 100804,
                'name' => 'Umari',
                'province_id' => 1008,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 100901,
                'name' => 'Puerto Inca',
                'province_id' => 1009,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 100902,
                'name' => 'Codo del Pozuzo',
                'province_id' => 1009,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 100903,
                'name' => 'Honoria',
                'province_id' => 1009,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 100904,
                'name' => 'Tournavista',
                'province_id' => 1009,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 100905,
                'name' => 'Yuyapichis',
                'province_id' => 1009,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 101001,
                'name' => 'Jesús',
                'province_id' => 1010,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 101002,
                'name' => 'Baños',
                'province_id' => 1010,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 101003,
                'name' => 'Jivia',
                'province_id' => 1010,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 101004,
                'name' => 'Queropalca',
                'province_id' => 1010,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 101005,
                'name' => 'Rondos',
                'province_id' => 1010,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 101006,
                'name' => 'San Francisco de Asís',
                'province_id' => 1010,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 101007,
                'name' => 'San Miguel de Cauri',
                'province_id' => 1010,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 101101,
                'name' => 'Chavinillo',
                'province_id' => 1011,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 101102,
                'name' => 'Cahuac',
                'province_id' => 1011,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 101103,
                'name' => 'Chacabamba',
                'province_id' => 1011,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 101104,
                'name' => 'Aparicio Pomares',
                'province_id' => 1011,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 101105,
                'name' => 'Jacas Chico',
                'province_id' => 1011,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 101106,
                'name' => 'Obas',
                'province_id' => 1011,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 101107,
                'name' => 'Pampamarca',
                'province_id' => 1011,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 101108,
                'name' => 'Choras',
                'province_id' => 1011,
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 110101,
                'name' => 'Ica',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 110102,
                'name' => 'La Tinguiña',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 110103,
                'name' => 'Los Aquijes',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 110104,
                'name' => 'Ocucaje',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 110105,
                'name' => 'Pachacutec',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 110106,
                'name' => 'Parcona',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 110107,
                'name' => 'Pueblo Nuevo',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 110108,
                'name' => 'Salas',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 110109,
                'name' => 'San José de Los Molinos',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 110110,
                'name' => 'San Juan Bautista',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 110111,
                'name' => 'Santiago',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 110112,
                'name' => 'Subtanjalla',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 110113,
                'name' => 'Tate',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 110114,
                'name' => 'Yauca del Rosario',
                'province_id' => 1101,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 110201,
                'name' => 'Chincha Alta',
                'province_id' => 1102,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 110202,
                'name' => 'Alto Laran',
                'province_id' => 1102,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 110203,
                'name' => 'Chavin',
                'province_id' => 1102,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 110204,
                'name' => 'Chincha Baja',
                'province_id' => 1102,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 110205,
                'name' => 'El Carmen',
                'province_id' => 1102,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 110206,
                'name' => 'Grocio Prado',
                'province_id' => 1102,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 110207,
                'name' => 'Pueblo Nuevo',
                'province_id' => 1102,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 110208,
                'name' => 'San Juan de Yanac',
                'province_id' => 1102,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 110209,
                'name' => 'San Pedro de Huacarpana',
                'province_id' => 1102,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 110210,
                'name' => 'Sunampe',
                'province_id' => 1102,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 110211,
                'name' => 'Tambo de Mora',
                'province_id' => 1102,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 110301,
                'name' => 'Nasca',
                'province_id' => 1103,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 110302,
                'name' => 'Changuillo',
                'province_id' => 1103,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 110303,
                'name' => 'El Ingenio',
                'province_id' => 1103,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 110304,
                'name' => 'Marcona',
                'province_id' => 1103,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 110305,
                'name' => 'Vista Alegre',
                'province_id' => 1103,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 110401,
                'name' => 'Palpa',
                'province_id' => 1104,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 110402,
                'name' => 'Llipata',
                'province_id' => 1104,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 110403,
                'name' => 'Río Grande',
                'province_id' => 1104,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 110404,
                'name' => 'Santa Cruz',
                'province_id' => 1104,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 110405,
                'name' => 'Tibillo',
                'province_id' => 1104,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 110501,
                'name' => 'Pisco',
                'province_id' => 1105,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 110502,
                'name' => 'Huancano',
                'province_id' => 1105,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 110503,
                'name' => 'Humay',
                'province_id' => 1105,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 110504,
                'name' => 'Independencia',
                'province_id' => 1105,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 110505,
                'name' => 'Paracas',
                'province_id' => 1105,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 110506,
                'name' => 'San Andrés',
                'province_id' => 1105,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 110507,
                'name' => 'San Clemente',
                'province_id' => 1105,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 110508,
                'name' => 'Tupac Amaru Inca',
                'province_id' => 1105,
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 120101,
                'name' => 'Huancayo',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 120104,
                'name' => 'Carhuacallanga',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 120105,
                'name' => 'Chacapampa',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 120106,
                'name' => 'Chicche',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 120107,
                'name' => 'Chilca',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 120108,
                'name' => 'Chongos Alto',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 120111,
                'name' => 'Chupuro',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 120112,
                'name' => 'Colca',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 120113,
                'name' => 'Cullhuas',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 120114,
                'name' => 'El Tambo',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 120116,
                'name' => 'Huacrapuquio',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 120117,
                'name' => 'Hualhuas',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 120119,
                'name' => 'Huancan',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 120120,
                'name' => 'Huasicancha',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 120121,
                'name' => 'Huayucachi',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 120122,
                'name' => 'Ingenio',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 120124,
                'name' => 'Pariahuanca',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 120125,
                'name' => 'Pilcomayo',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 120126,
                'name' => 'Pucara',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 120127,
                'name' => 'Quichuay',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 120128,
                'name' => 'Quilcas',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 120129,
                'name' => 'San Agustín',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 120130,
                'name' => 'San Jerónimo de Tunan',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 120132,
                'name' => 'Saño',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 120133,
                'name' => 'Sapallanga',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 120134,
                'name' => 'Sicaya',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 120135,
                'name' => 'Santo Domingo de Acobamba',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 120136,
                'name' => 'Viques',
                'province_id' => 1201,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 120201,
                'name' => 'Concepción',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 120202,
                'name' => 'Aco',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 120203,
                'name' => 'Andamarca',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 120204,
                'name' => 'Chambara',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 120205,
                'name' => 'Cochas',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 120206,
                'name' => 'Comas',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 120207,
                'name' => 'Heroínas Toledo',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 120208,
                'name' => 'Manzanares',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 120209,
                'name' => 'Mariscal Castilla',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 120210,
                'name' => 'Matahuasi',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 120211,
                'name' => 'Mito',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 120212,
                'name' => 'Nueve de Julio',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 120213,
                'name' => 'Orcotuna',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 120214,
                'name' => 'San José de Quero',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 120215,
                'name' => 'Santa Rosa de Ocopa',
                'province_id' => 1202,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 120301,
                'name' => 'Chanchamayo',
                'province_id' => 1203,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 120302,
                'name' => 'Perene',
                'province_id' => 1203,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 120303,
                'name' => 'Pichanaqui',
                'province_id' => 1203,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 120304,
                'name' => 'San Luis de Shuaro',
                'province_id' => 1203,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 120305,
                'name' => 'San Ramón',
                'province_id' => 1203,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 120306,
                'name' => 'Vitoc',
                'province_id' => 1203,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 120401,
                'name' => 'Jauja',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 120402,
                'name' => 'Acolla',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 120403,
                'name' => 'Apata',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 120404,
                'name' => 'Ataura',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 120405,
                'name' => 'Canchayllo',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 120406,
                'name' => 'Curicaca',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 120407,
                'name' => 'El Mantaro',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 120408,
                'name' => 'Huamali',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 120409,
                'name' => 'Huaripampa',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 120410,
                'name' => 'Huertas',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 120411,
                'name' => 'Janjaillo',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 120412,
                'name' => 'Julcán',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 120413,
                'name' => 'Leonor Ordóñez',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 120414,
                'name' => 'Llocllapampa',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 120415,
                'name' => 'Marco',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 120416,
                'name' => 'Masma',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 120417,
                'name' => 'Masma Chicche',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 120418,
                'name' => 'Molinos',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 120419,
                'name' => 'Monobamba',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 120420,
                'name' => 'Muqui',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 120421,
                'name' => 'Muquiyauyo',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 120422,
                'name' => 'Paca',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 120423,
                'name' => 'Paccha',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 120424,
                'name' => 'Pancan',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 120425,
                'name' => 'Parco',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 120426,
                'name' => 'Pomacancha',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 120427,
                'name' => 'Ricran',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 120428,
                'name' => 'San Lorenzo',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 120429,
                'name' => 'San Pedro de Chunan',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 120430,
                'name' => 'Sausa',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 120431,
                'name' => 'Sincos',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 120432,
                'name' => 'Tunan Marca',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 120433,
                'name' => 'Yauli',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 120434,
                'name' => 'Yauyos',
                'province_id' => 1204,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 120501,
                'name' => 'Junin',
                'province_id' => 1205,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120502,
                'name' => 'Carhuamayo',
                'province_id' => 1205,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 120503,
                'name' => 'Ondores',
                'province_id' => 1205,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 120504,
                'name' => 'Ulcumayo',
                'province_id' => 1205,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 120601,
                'name' => 'Satipo',
                'province_id' => 1206,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 120602,
                'name' => 'Coviriali',
                'province_id' => 1206,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 120603,
                'name' => 'Llaylla',
                'province_id' => 1206,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 120604,
                'name' => 'Mazamari',
                'province_id' => 1206,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 120605,
                'name' => 'Pampa Hermosa',
                'province_id' => 1206,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 120606,
                'name' => 'Pangoa',
                'province_id' => 1206,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 120607,
                'name' => 'Río Negro',
                'province_id' => 1206,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 120608,
                'name' => 'Río Tambo',
                'province_id' => 1206,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 120609,
                'name' => 'Vizcatan del Ene',
                'province_id' => 1206,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 120701,
                'name' => 'Tarma',
                'province_id' => 1207,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 120702,
                'name' => 'Acobamba',
                'province_id' => 1207,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 120703,
                'name' => 'Huaricolca',
                'province_id' => 1207,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 120704,
                'name' => 'Huasahuasi',
                'province_id' => 1207,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 120705,
                'name' => 'La Unión',
                'province_id' => 1207,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 120706,
                'name' => 'Palca',
                'province_id' => 1207,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 120707,
                'name' => 'Palcamayo',
                'province_id' => 1207,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 120708,
                'name' => 'San Pedro de Cajas',
                'province_id' => 1207,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 120709,
                'name' => 'Tapo',
                'province_id' => 1207,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 120801,
                'name' => 'La Oroya',
                'province_id' => 1208,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 120802,
                'name' => 'Chacapalpa',
                'province_id' => 1208,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 120803,
                'name' => 'Huay-Huay',
                'province_id' => 1208,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 120804,
                'name' => 'Marcapomacocha',
                'province_id' => 1208,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 120805,
                'name' => 'Morococha',
                'province_id' => 1208,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 120806,
                'name' => 'Paccha',
                'province_id' => 1208,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 120807,
                'name' => 'Santa Bárbara de Carhuacayan',
                'province_id' => 1208,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 120808,
                'name' => 'Santa Rosa de Sacco',
                'province_id' => 1208,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 120809,
                'name' => 'Suitucancha',
                'province_id' => 1208,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 120810,
                'name' => 'Yauli',
                'province_id' => 1208,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 120901,
                'name' => 'Chupaca',
                'province_id' => 1209,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 120902,
                'name' => 'Ahuac',
                'province_id' => 1209,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 120903,
                'name' => 'Chongos Bajo',
                'province_id' => 1209,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 120904,
                'name' => 'Huachac',
                'province_id' => 1209,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 120905,
                'name' => 'Huamancaca Chico',
                'province_id' => 1209,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 120906,
                'name' => 'San Juan de Iscos',
                'province_id' => 1209,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 120907,
                'name' => 'San Juan de Jarpa',
                'province_id' => 1209,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 120908,
                'name' => 'Tres de Diciembre',
                'province_id' => 1209,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 120909,
                'name' => 'Yanacancha',
                'province_id' => 1209,
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 130101,
                'name' => 'Trujillo',
                'province_id' => 1301,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 130102,
                'name' => 'El Porvenir',
                'province_id' => 1301,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 130103,
                'name' => 'Florencia de Mora',
                'province_id' => 1301,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 130104,
                'name' => 'Huanchaco',
                'province_id' => 1301,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 130105,
                'name' => 'La Esperanza',
                'province_id' => 1301,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 130106,
                'name' => 'Laredo',
                'province_id' => 1301,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 130107,
                'name' => 'Moche',
                'province_id' => 1301,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 130108,
                'name' => 'Poroto',
                'province_id' => 1301,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 130109,
                'name' => 'Salaverry',
                'province_id' => 1301,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 130110,
                'name' => 'Simbal',
                'province_id' => 1301,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 130111,
                'name' => 'Victor Larco Herrera',
                'province_id' => 1301,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 130201,
                'name' => 'Ascope',
                'province_id' => 1302,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 130202,
                'name' => 'Chicama',
                'province_id' => 1302,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 130203,
                'name' => 'Chocope',
                'province_id' => 1302,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 130204,
                'name' => 'Magdalena de Cao',
                'province_id' => 1302,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 130205,
                'name' => 'Paijan',
                'province_id' => 1302,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 130206,
                'name' => 'Rázuri',
                'province_id' => 1302,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 130207,
                'name' => 'Santiago de Cao',
                'province_id' => 1302,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 130208,
                'name' => 'Casa Grande',
                'province_id' => 1302,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 130301,
                'name' => 'Bolívar',
                'province_id' => 1303,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 130302,
                'name' => 'Bambamarca',
                'province_id' => 1303,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 130303,
                'name' => 'Condormarca',
                'province_id' => 1303,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 130304,
                'name' => 'Longotea',
                'province_id' => 1303,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 130305,
                'name' => 'Uchumarca',
                'province_id' => 1303,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 130306,
                'name' => 'Ucuncha',
                'province_id' => 1303,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 130401,
                'name' => 'Chepen',
                'province_id' => 1304,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 130402,
                'name' => 'Pacanga',
                'province_id' => 1304,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 130403,
                'name' => 'Pueblo Nuevo',
                'province_id' => 1304,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 130501,
                'name' => 'Julcan',
                'province_id' => 1305,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 130502,
                'name' => 'Calamarca',
                'province_id' => 1305,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 130503,
                'name' => 'Carabamba',
                'province_id' => 1305,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 130504,
                'name' => 'Huaso',
                'province_id' => 1305,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 130601,
                'name' => 'Otuzco',
                'province_id' => 1306,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 130602,
                'name' => 'Agallpampa',
                'province_id' => 1306,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 130604,
                'name' => 'Charat',
                'province_id' => 1306,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 130605,
                'name' => 'Huaranchal',
                'province_id' => 1306,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 130606,
                'name' => 'La Cuesta',
                'province_id' => 1306,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 130608,
                'name' => 'Mache',
                'province_id' => 1306,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 130610,
                'name' => 'Paranday',
                'province_id' => 1306,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 130611,
                'name' => 'Salpo',
                'province_id' => 1306,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 130613,
                'name' => 'Sinsicap',
                'province_id' => 1306,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 130614,
                'name' => 'Usquil',
                'province_id' => 1306,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 130701,
                'name' => 'San Pedro de Lloc',
                'province_id' => 1307,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 130702,
                'name' => 'Guadalupe',
                'province_id' => 1307,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 130703,
                'name' => 'Jequetepeque',
                'province_id' => 1307,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 130704,
                'name' => 'Pacasmayo',
                'province_id' => 1307,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 130705,
                'name' => 'San José',
                'province_id' => 1307,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 130801,
                'name' => 'Tayabamba',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 130802,
                'name' => 'Buldibuyo',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 130803,
                'name' => 'Chillia',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 130804,
                'name' => 'Huancaspata',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 130805,
                'name' => 'Huaylillas',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 130806,
                'name' => 'Huayo',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 130807,
                'name' => 'Ongon',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 130808,
                'name' => 'Parcoy',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 130809,
                'name' => 'Pataz',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 130810,
                'name' => 'Pias',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 130811,
                'name' => 'Santiago de Challas',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 130812,
                'name' => 'Taurija',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 130813,
                'name' => 'Urpay',
                'province_id' => 1308,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 130901,
                'name' => 'Huamachuco',
                'province_id' => 1309,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 130902,
                'name' => 'Chugay',
                'province_id' => 1309,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 130903,
                'name' => 'Cochorco',
                'province_id' => 1309,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 130904,
                'name' => 'Curgos',
                'province_id' => 1309,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 130905,
                'name' => 'Marcabal',
                'province_id' => 1309,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 130906,
                'name' => 'Sanagoran',
                'province_id' => 1309,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 130907,
                'name' => 'Sarin',
                'province_id' => 1309,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 130908,
                'name' => 'Sartimbamba',
                'province_id' => 1309,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 131001,
                'name' => 'Santiago de Chuco',
                'province_id' => 1310,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 131002,
                'name' => 'Angasmarca',
                'province_id' => 1310,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 131003,
                'name' => 'Cachicadan',
                'province_id' => 1310,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 131004,
                'name' => 'Mollebamba',
                'province_id' => 1310,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 131005,
                'name' => 'Mollepata',
                'province_id' => 1310,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 131006,
                'name' => 'Quiruvilca',
                'province_id' => 1310,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 131007,
                'name' => 'Santa Cruz de Chuca',
                'province_id' => 1310,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 131008,
                'name' => 'Sitabamba',
                'province_id' => 1310,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 131101,
                'name' => 'Cascas',
                'province_id' => 1311,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 131102,
                'name' => 'Lucma',
                'province_id' => 1311,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 131103,
                'name' => 'Marmot',
                'province_id' => 1311,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 131104,
                'name' => 'Sayapullo',
                'province_id' => 1311,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 131201,
                'name' => 'Viru',
                'province_id' => 1312,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 131202,
                'name' => 'Chao',
                'province_id' => 1312,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 131203,
                'name' => 'Guadalupito',
                'province_id' => 1312,
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 140101,
                'name' => 'Chiclayo',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 140102,
                'name' => 'Chongoyape',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 140103,
                'name' => 'Eten',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 140104,
                'name' => 'Eten Puerto',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 140105,
                'name' => 'José Leonardo Ortiz',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 140106,
                'name' => 'La Victoria',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 140107,
                'name' => 'Lagunas',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 140108,
                'name' => 'Monsefu',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 140109,
                'name' => 'Nueva Arica',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 140110,
                'name' => 'Oyotun',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 140111,
                'name' => 'Picsi',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 140112,
                'name' => 'Pimentel',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 140113,
                'name' => 'Reque',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 140114,
                'name' => 'Santa Rosa',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 140115,
                'name' => 'Saña',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 140116,
                'name' => 'Cayalti',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 140117,
                'name' => 'Patapo',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 140118,
                'name' => 'Pomalca',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 140119,
                'name' => 'Pucala',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 140120,
                'name' => 'Tuman',
                'province_id' => 1401,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 140201,
                'name' => 'Ferreñafe',
                'province_id' => 1402,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 140202,
                'name' => 'Cañaris',
                'province_id' => 1402,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 140203,
                'name' => 'Incahuasi',
                'province_id' => 1402,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 140204,
                'name' => 'Manuel Antonio Mesones Muro',
                'province_id' => 1402,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 140205,
                'name' => 'Pitipo',
                'province_id' => 1402,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 140206,
                'name' => 'Pueblo Nuevo',
                'province_id' => 1402,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 140301,
                'name' => 'Lambayeque',
                'province_id' => 1403,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 140302,
                'name' => 'Chochope',
                'province_id' => 1403,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 140303,
                'name' => 'Illimo',
                'province_id' => 1403,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 140304,
                'name' => 'Jayanca',
                'province_id' => 1403,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 140305,
                'name' => 'Mochumi',
                'province_id' => 1403,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 140306,
                'name' => 'Morrope',
                'province_id' => 1403,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 140307,
                'name' => 'Motupe',
                'province_id' => 1403,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 140308,
                'name' => 'Olmos',
                'province_id' => 1403,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 140309,
                'name' => 'Pacora',
                'province_id' => 1403,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 140310,
                'name' => 'Salas',
                'province_id' => 1403,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 140311,
                'name' => 'San José',
                'province_id' => 1403,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 140312,
                'name' => 'Tucume',
                'province_id' => 1403,
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 150101,
                'name' => 'Lima',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 150102,
                'name' => 'Ancón',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 150103,
                'name' => 'Ate',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 150104,
                'name' => 'Barranco',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 150105,
                'name' => 'Breña',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 150106,
                'name' => 'Carabayllo',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 150107,
                'name' => 'Chaclacayo',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 150108,
                'name' => 'Chorrillos',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 150109,
                'name' => 'Cieneguilla',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 150110,
                'name' => 'Comas',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 150111,
                'name' => 'El Agustino',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 150112,
                'name' => 'Independencia',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 150113,
                'name' => 'Jesús María',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 150114,
                'name' => 'La Molina',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 150115,
                'name' => 'La Victoria',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 150116,
                'name' => 'Lince',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 150117,
                'name' => 'Los Olivos',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 150118,
                'name' => 'Lurigancho',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 150119,
                'name' => 'Lurin',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 150120,
                'name' => 'Magdalena del Mar',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 150121,
                'name' => 'Pueblo Libre',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 150122,
                'name' => 'Miraflores',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 150123,
                'name' => 'Pachacamac',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 150124,
                'name' => 'Pucusana',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 150125,
                'name' => 'Puente Piedra',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 150126,
                'name' => 'Punta Hermosa',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 150127,
                'name' => 'Punta Negra',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 150128,
                'name' => 'Rímac',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 150129,
                'name' => 'San Bartolo',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 150130,
                'name' => 'San Borja',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 150131,
                'name' => 'San Isidro',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 150132,
                'name' => 'San Juan de Lurigancho',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 150133,
                'name' => 'San Juan de Miraflores',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 150134,
                'name' => 'San Luis',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 150135,
                'name' => 'San Martín de Porres',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 150136,
                'name' => 'San Miguel',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 150137,
                'name' => 'Santa Anita',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 150138,
                'name' => 'Santa María del Mar',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 150139,
                'name' => 'Santa Rosa',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 150140,
                'name' => 'Santiago de Surco',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 150141,
                'name' => 'Surquillo',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 150142,
                'name' => 'Villa El Salvador',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 150143,
                'name' => 'Villa María del Triunfo',
                'province_id' => 1501,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 150201,
                'name' => 'Barranca',
                'province_id' => 1502,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 150202,
                'name' => 'Paramonga',
                'province_id' => 1502,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 150203,
                'name' => 'Pativilca',
                'province_id' => 1502,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 150204,
                'name' => 'Supe',
                'province_id' => 1502,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 150205,
                'name' => 'Supe Puerto',
                'province_id' => 1502,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 150301,
                'name' => 'Cajatambo',
                'province_id' => 1503,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 150302,
                'name' => 'Copa',
                'province_id' => 1503,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 150303,
                'name' => 'Gorgor',
                'province_id' => 1503,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 150304,
                'name' => 'Huancapon',
                'province_id' => 1503,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 150305,
                'name' => 'Manas',
                'province_id' => 1503,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 150401,
                'name' => 'Canta',
                'province_id' => 1504,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 150402,
                'name' => 'Arahuay',
                'province_id' => 1504,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 150403,
                'name' => 'Huamantanga',
                'province_id' => 1504,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 150404,
                'name' => 'Huaros',
                'province_id' => 1504,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 150405,
                'name' => 'Lachaqui',
                'province_id' => 1504,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 150406,
                'name' => 'San Buenaventura',
                'province_id' => 1504,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 150407,
                'name' => 'Santa Rosa de Quives',
                'province_id' => 1504,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 150501,
                'name' => 'San Vicente de Cañete',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 150502,
                'name' => 'Asia',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 150503,
                'name' => 'Calango',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 150504,
                'name' => 'Cerro Azul',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 150505,
                'name' => 'Chilca',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 150506,
                'name' => 'Coayllo',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 150507,
                'name' => 'Imperial',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 150508,
                'name' => 'Lunahuana',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 150509,
                'name' => 'Mala',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 150510,
                'name' => 'Nuevo Imperial',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 150511,
                'name' => 'Pacaran',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 150512,
                'name' => 'Quilmana',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 150513,
                'name' => 'San Antonio',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 150514,
                'name' => 'San Luis',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 150515,
                'name' => 'Santa Cruz de Flores',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 150516,
                'name' => 'Zúñiga',
                'province_id' => 1505,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 150601,
                'name' => 'Huaral',
                'province_id' => 1506,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 150602,
                'name' => 'Atavillos Alto',
                'province_id' => 1506,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 150603,
                'name' => 'Atavillos Bajo',
                'province_id' => 1506,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 150604,
                'name' => 'Aucallama',
                'province_id' => 1506,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 150605,
                'name' => 'Chancay',
                'province_id' => 1506,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 150606,
                'name' => 'Ihuari',
                'province_id' => 1506,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 150607,
                'name' => 'Lampian',
                'province_id' => 1506,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 150608,
                'name' => 'Pacaraos',
                'province_id' => 1506,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 150609,
                'name' => 'San Miguel de Acos',
                'province_id' => 1506,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 150610,
                'name' => 'Santa Cruz de Andamarca',
                'province_id' => 1506,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 150611,
                'name' => 'Sumbilca',
                'province_id' => 1506,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 150612,
                'name' => 'Veintisiete de Noviembre',
                'province_id' => 1506,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 150701,
                'name' => 'Matucana',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 150702,
                'name' => 'Antioquia',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 150703,
                'name' => 'Callahuanca',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 150704,
                'name' => 'Carampoma',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 150705,
                'name' => 'Chicla',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 150706,
                'name' => 'Cuenca',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 150707,
                'name' => 'Huachupampa',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 150708,
                'name' => 'Huanza',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 150709,
                'name' => 'Huarochiri',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 150710,
                'name' => 'Lahuaytambo',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 150711,
                'name' => 'Langa',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 150712,
                'name' => 'Laraos',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 150713,
                'name' => 'Mariatana',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 150714,
                'name' => 'Ricardo Palma',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 150715,
                'name' => 'San Andrés de Tupicocha',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 150716,
                'name' => 'San Antonio',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 150717,
                'name' => 'San Bartolomé',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 150718,
                'name' => 'San Damian',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 150719,
                'name' => 'San Juan de Iris',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 150720,
                'name' => 'San Juan de Tantaranche',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 150721,
                'name' => 'San Lorenzo de Quinti',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 150722,
                'name' => 'San Mateo',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 150723,
                'name' => 'San Mateo de Otao',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 150724,
                'name' => 'San Pedro de Casta',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 150725,
                'name' => 'San Pedro de Huancayre',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 150726,
                'name' => 'Sangallaya',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 150727,
                'name' => 'Santa Cruz de Cocachacra',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 150728,
                'name' => 'Santa Eulalia',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 150729,
                'name' => 'Santiago de Anchucaya',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 150730,
                'name' => 'Santiago de Tuna',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 150731,
                'name' => 'Santo Domingo de Los Olleros',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 150732,
                'name' => 'Surco',
                'province_id' => 1507,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 150801,
                'name' => 'Huacho',
                'province_id' => 1508,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 150802,
                'name' => 'Ambar',
                'province_id' => 1508,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 150803,
                'name' => 'Caleta de Carquin',
                'province_id' => 1508,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 150804,
                'name' => 'Checras',
                'province_id' => 1508,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 150805,
                'name' => 'Hualmay',
                'province_id' => 1508,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 150806,
                'name' => 'Huaura',
                'province_id' => 1508,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 150807,
                'name' => 'Leoncio Prado',
                'province_id' => 1508,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 150808,
                'name' => 'Paccho',
                'province_id' => 1508,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 150809,
                'name' => 'Santa Leonor',
                'province_id' => 1508,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 150810,
                'name' => 'Santa María',
                'province_id' => 1508,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 150811,
                'name' => 'Sayan',
                'province_id' => 1508,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 150812,
                'name' => 'Vegueta',
                'province_id' => 1508,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 150901,
                'name' => 'Oyon',
                'province_id' => 1509,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 150902,
                'name' => 'Andajes',
                'province_id' => 1509,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 150903,
                'name' => 'Caujul',
                'province_id' => 1509,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 150904,
                'name' => 'Cochamarca',
                'province_id' => 1509,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 150905,
                'name' => 'Navan',
                'province_id' => 1509,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 150906,
                'name' => 'Pachangara',
                'province_id' => 1509,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 151001,
                'name' => 'Yauyos',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 151002,
                'name' => 'Alis',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 151003,
                'name' => 'Allauca',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 151004,
                'name' => 'Ayaviri',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 151005,
                'name' => 'Azángaro',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 151006,
                'name' => 'Cacra',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 151007,
                'name' => 'Carania',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 151008,
                'name' => 'Catahuasi',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 151009,
                'name' => 'Chocos',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 151010,
                'name' => 'Cochas',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 151011,
                'name' => 'Colonia',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 151012,
                'name' => 'Hongos',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 151013,
                'name' => 'Huampara',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 151014,
                'name' => 'Huancaya',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 151015,
                'name' => 'Huangascar',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 151016,
                'name' => 'Huantan',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 151017,
                'name' => 'Huañec',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 151018,
                'name' => 'Laraos',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 151019,
                'name' => 'Lincha',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 151020,
                'name' => 'Madean',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 151021,
                'name' => 'Miraflores',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 151022,
                'name' => 'Omas',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 151023,
                'name' => 'Putinza',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 151024,
                'name' => 'Quinches',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 151025,
                'name' => 'Quinocay',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 151026,
                'name' => 'San Joaquín',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 151027,
                'name' => 'San Pedro de Pilas',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 151028,
                'name' => 'Tanta',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 151029,
                'name' => 'Tauripampa',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 151030,
                'name' => 'Tomas',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 151031,
                'name' => 'Tupe',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 151032,
                'name' => 'Viñac',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 151033,
                'name' => 'Vitis',
                'province_id' => 1510,
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 160101,
                'name' => 'Iquitos',
                'province_id' => 1601,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 160102,
                'name' => 'Alto Nanay',
                'province_id' => 1601,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 160103,
                'name' => 'Fernando Lores',
                'province_id' => 1601,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 160104,
                'name' => 'Indiana',
                'province_id' => 1601,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 160105,
                'name' => 'Las Amazonas',
                'province_id' => 1601,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 160106,
                'name' => 'Mazan',
                'province_id' => 1601,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 160107,
                'name' => 'Napo',
                'province_id' => 1601,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 160108,
                'name' => 'Punchana',
                'province_id' => 1601,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 160110,
                'name' => 'Torres Causana',
                'province_id' => 1601,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 160112,
                'name' => 'Belén',
                'province_id' => 1601,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 160113,
                'name' => 'San Juan Bautista',
                'province_id' => 1601,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 160201,
                'name' => 'Yurimaguas',
                'province_id' => 1602,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 160202,
                'name' => 'Balsapuerto',
                'province_id' => 1602,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 160205,
                'name' => 'Jeberos',
                'province_id' => 1602,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 160206,
                'name' => 'Lagunas',
                'province_id' => 1602,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 160210,
                'name' => 'Santa Cruz',
                'province_id' => 1602,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 160211,
                'name' => 'Teniente Cesar López Rojas',
                'province_id' => 1602,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 160301,
                'name' => 'Nauta',
                'province_id' => 1603,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 160302,
                'name' => 'Parinari',
                'province_id' => 1603,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 160303,
                'name' => 'Tigre',
                'province_id' => 1603,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 160304,
                'name' => 'Trompeteros',
                'province_id' => 1603,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 160305,
                'name' => 'Urarinas',
                'province_id' => 1603,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 160401,
                'name' => 'Ramón Castilla',
                'province_id' => 1604,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 160402,
                'name' => 'Pebas',
                'province_id' => 1604,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 160403,
                'name' => 'Yavari',
                'province_id' => 1604,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 160404,
                'name' => 'San Pablo',
                'province_id' => 1604,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 160501,
                'name' => 'Requena',
                'province_id' => 1605,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 160502,
                'name' => 'Alto Tapiche',
                'province_id' => 1605,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 160503,
                'name' => 'Capelo',
                'province_id' => 1605,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 160504,
                'name' => 'Emilio San Martín',
                'province_id' => 1605,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 160505,
                'name' => 'Maquia',
                'province_id' => 1605,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 160506,
                'name' => 'Puinahua',
                'province_id' => 1605,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 160507,
                'name' => 'Saquena',
                'province_id' => 1605,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 160508,
                'name' => 'Soplin',
                'province_id' => 1605,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 160509,
                'name' => 'Tapiche',
                'province_id' => 1605,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 160510,
                'name' => 'Jenaro Herrera',
                'province_id' => 1605,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 160511,
                'name' => 'Yaquerana',
                'province_id' => 1605,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 160601,
                'name' => 'Contamana',
                'province_id' => 1606,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 160602,
                'name' => 'Inahuaya',
                'province_id' => 1606,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 160603,
                'name' => 'Padre Márquez',
                'province_id' => 1606,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 160604,
                'name' => 'Pampa Hermosa',
                'province_id' => 1606,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 160605,
                'name' => 'Sarayacu',
                'province_id' => 1606,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 160606,
                'name' => 'Vargas Guerra',
                'province_id' => 1606,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 160701,
                'name' => 'Barranca',
                'province_id' => 1607,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 160702,
                'name' => 'Cahuapanas',
                'province_id' => 1607,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 160703,
                'name' => 'Manseriche',
                'province_id' => 1607,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 160704,
                'name' => 'Morona',
                'province_id' => 1607,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 160705,
                'name' => 'Pastaza',
                'province_id' => 1607,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 160706,
                'name' => 'Andoas',
                'province_id' => 1607,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 160801,
                'name' => 'Putumayo',
                'province_id' => 1608,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 160802,
                'name' => 'Rosa Panduro',
                'province_id' => 1608,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 160803,
                'name' => 'Teniente Manuel Clavero',
                'province_id' => 1608,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 160804,
                'name' => 'Yaguas',
                'province_id' => 1608,
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 170101,
                'name' => 'Tambopata',
                'province_id' => 1701,
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 170102,
                'name' => 'Inambari',
                'province_id' => 1701,
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 170103,
                'name' => 'Las Piedras',
                'province_id' => 1701,
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 170104,
                'name' => 'Laberinto',
                'province_id' => 1701,
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 170201,
                'name' => 'Manu',
                'province_id' => 1702,
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 170202,
                'name' => 'Fitzcarrald',
                'province_id' => 1702,
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 170203,
                'name' => 'Madre de Dios',
                'province_id' => 1702,
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 170204,
                'name' => 'Huepetuhe',
                'province_id' => 1702,
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 170301,
                'name' => 'Iñapari',
                'province_id' => 1703,
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 170302,
                'name' => 'Iberia',
                'province_id' => 1703,
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 170303,
                'name' => 'Tahuamanu',
                'province_id' => 1703,
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 180101,
                'name' => 'Moquegua',
                'province_id' => 1801,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 180102,
                'name' => 'Carumas',
                'province_id' => 1801,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 180103,
                'name' => 'Cuchumbaya',
                'province_id' => 1801,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 180104,
                'name' => 'Samegua',
                'province_id' => 1801,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 180105,
                'name' => 'San Cristóbal',
                'province_id' => 1801,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 180106,
                'name' => 'Torata',
                'province_id' => 1801,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 180201,
                'name' => 'Omate',
                'province_id' => 1802,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 180202,
                'name' => 'Chojata',
                'province_id' => 1802,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 180203,
                'name' => 'Coalaque',
                'province_id' => 1802,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 180204,
                'name' => 'Ichuña',
                'province_id' => 1802,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 180205,
                'name' => 'La Capilla',
                'province_id' => 1802,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 180206,
                'name' => 'Lloque',
                'province_id' => 1802,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 180207,
                'name' => 'Matalaque',
                'province_id' => 1802,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 180208,
                'name' => 'Puquina',
                'province_id' => 1802,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 180209,
                'name' => 'Quinistaquillas',
                'province_id' => 1802,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 180210,
                'name' => 'Ubinas',
                'province_id' => 1802,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 180211,
                'name' => 'Yunga',
                'province_id' => 1802,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 180301,
                'name' => 'Ilo',
                'province_id' => 1803,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 180302,
                'name' => 'El Algarrobal',
                'province_id' => 1803,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 180303,
                'name' => 'Pacocha',
                'province_id' => 1803,
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 190101,
                'name' => 'Chaupimarca',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 190102,
                'name' => 'Huachon',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 190103,
                'name' => 'Huariaca',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 190104,
                'name' => 'Huayllay',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 190105,
                'name' => 'Ninacaca',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 190106,
                'name' => 'Pallanchacra',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 190107,
                'name' => 'Paucartambo',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 190108,
                'name' => 'San Francisco de Asís de Yarusyacan',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 190109,
                'name' => 'Simon Bolívar',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 190110,
                'name' => 'Ticlacayan',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 190111,
                'name' => 'Tinyahuarco',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 190112,
                'name' => 'Vicco',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 190113,
                'name' => 'Yanacancha',
                'province_id' => 1901,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 190201,
                'name' => 'Yanahuanca',
                'province_id' => 1902,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 190202,
                'name' => 'Chacayan',
                'province_id' => 1902,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 190203,
                'name' => 'Goyllarisquizga',
                'province_id' => 1902,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 190204,
                'name' => 'Paucar',
                'province_id' => 1902,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 190205,
                'name' => 'San Pedro de Pillao',
                'province_id' => 1902,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 190206,
                'name' => 'Santa Ana de Tusi',
                'province_id' => 1902,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 190207,
                'name' => 'Tapuc',
                'province_id' => 1902,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 190208,
                'name' => 'Vilcabamba',
                'province_id' => 1902,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 190301,
                'name' => 'Oxapampa',
                'province_id' => 1903,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 190302,
                'name' => 'Chontabamba',
                'province_id' => 1903,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 190303,
                'name' => 'Huancabamba',
                'province_id' => 1903,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 190304,
                'name' => 'Palcazu',
                'province_id' => 1903,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 190305,
                'name' => 'Pozuzo',
                'province_id' => 1903,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 190306,
                'name' => 'Puerto Bermúdez',
                'province_id' => 1903,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 190307,
                'name' => 'Villa Rica',
                'province_id' => 1903,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 190308,
                'name' => 'Constitución',
                'province_id' => 1903,
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 200101,
                'name' => 'Piura',
                'province_id' => 2001,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 200104,
                'name' => 'Castilla',
                'province_id' => 2001,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 200105,
                'name' => 'Catacaos',
                'province_id' => 2001,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 200107,
                'name' => 'Cura Mori',
                'province_id' => 2001,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 200108,
                'name' => 'El Tallan',
                'province_id' => 2001,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 200109,
                'name' => 'La Arena',
                'province_id' => 2001,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 200110,
                'name' => 'La Unión',
                'province_id' => 2001,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 200111,
                'name' => 'Las Lomas',
                'province_id' => 2001,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 200114,
                'name' => 'Tambo Grande',
                'province_id' => 2001,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 200115,
                'name' => 'Veintiseis de Octubre',
                'province_id' => 2001,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 200201,
                'name' => 'Ayabaca',
                'province_id' => 2002,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 200202,
                'name' => 'Frias',
                'province_id' => 2002,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 200203,
                'name' => 'Jilili',
                'province_id' => 2002,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 200204,
                'name' => 'Lagunas',
                'province_id' => 2002,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 200205,
                'name' => 'Montero',
                'province_id' => 2002,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 200206,
                'name' => 'Pacaipampa',
                'province_id' => 2002,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 200207,
                'name' => 'Paimas',
                'province_id' => 2002,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 200208,
                'name' => 'Sapillica',
                'province_id' => 2002,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 200209,
                'name' => 'Sicchez',
                'province_id' => 2002,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 200210,
                'name' => 'Suyo',
                'province_id' => 2002,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 200301,
                'name' => 'Huancabamba',
                'province_id' => 2003,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 200302,
                'name' => 'Canchaque',
                'province_id' => 2003,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 200303,
                'name' => 'El Carmen de la Frontera',
                'province_id' => 2003,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 200304,
                'name' => 'Huarmaca',
                'province_id' => 2003,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 200305,
                'name' => 'Lalaquiz',
                'province_id' => 2003,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 200306,
                'name' => 'San Miguel de El Faique',
                'province_id' => 2003,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 200307,
                'name' => 'Sondor',
                'province_id' => 2003,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 200308,
                'name' => 'Sondorillo',
                'province_id' => 2003,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 200401,
                'name' => 'Chulucanas',
                'province_id' => 2004,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 200402,
                'name' => 'Buenos Aires',
                'province_id' => 2004,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 200403,
                'name' => 'Chalaco',
                'province_id' => 2004,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 200404,
                'name' => 'La Matanza',
                'province_id' => 2004,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 200405,
                'name' => 'Morropon',
                'province_id' => 2004,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 200406,
                'name' => 'Salitral',
                'province_id' => 2004,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 200407,
                'name' => 'San Juan de Bigote',
                'province_id' => 2004,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 200408,
                'name' => 'Santa Catalina de Mossa',
                'province_id' => 2004,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 200409,
                'name' => 'Santo Domingo',
                'province_id' => 2004,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 200410,
                'name' => 'Yamango',
                'province_id' => 2004,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 200501,
                'name' => 'Paita',
                'province_id' => 2005,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 200502,
                'name' => 'Amotape',
                'province_id' => 2005,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 200503,
                'name' => 'Arenal',
                'province_id' => 2005,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 200504,
                'name' => 'Colan',
                'province_id' => 2005,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 200505,
                'name' => 'La Huaca',
                'province_id' => 2005,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 200506,
                'name' => 'Tamarindo',
                'province_id' => 2005,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 200507,
                'name' => 'Vichayal',
                'province_id' => 2005,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 200601,
                'name' => 'Sullana',
                'province_id' => 2006,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 200602,
                'name' => 'Bellavista',
                'province_id' => 2006,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 200603,
                'name' => 'Ignacio Escudero',
                'province_id' => 2006,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 200604,
                'name' => 'Lancones',
                'province_id' => 2006,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 200605,
                'name' => 'Marcavelica',
                'province_id' => 2006,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 200606,
                'name' => 'Miguel Checa',
                'province_id' => 2006,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 200607,
                'name' => 'Querecotillo',
                'province_id' => 2006,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 200608,
                'name' => 'Salitral',
                'province_id' => 2006,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 200701,
                'name' => 'Pariñas',
                'province_id' => 2007,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 200702,
                'name' => 'El Alto',
                'province_id' => 2007,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 200703,
                'name' => 'La Brea',
                'province_id' => 2007,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 200704,
                'name' => 'Lobitos',
                'province_id' => 2007,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 200705,
                'name' => 'Los Organos',
                'province_id' => 2007,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 200706,
                'name' => 'Mancora',
                'province_id' => 2007,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 200801,
                'name' => 'Sechura',
                'province_id' => 2008,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 200802,
                'name' => 'Bellavista de la Unión',
                'province_id' => 2008,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 200803,
                'name' => 'Bernal',
                'province_id' => 2008,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 200804,
                'name' => 'Cristo Nos Valga',
                'province_id' => 2008,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 200805,
                'name' => 'Vice',
                'province_id' => 2008,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 200806,
                'name' => 'Rinconada Llicuar',
                'province_id' => 2008,
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 210101,
                'name' => 'Puno',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 210102,
                'name' => 'Acora',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 210103,
                'name' => 'Amantani',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 210104,
                'name' => 'Atuncolla',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 210105,
                'name' => 'Capachica',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 210106,
                'name' => 'Chucuito',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 210107,
                'name' => 'Coata',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 210108,
                'name' => 'Huata',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 210109,
                'name' => 'Mañazo',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 210110,
                'name' => 'Paucarcolla',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 210111,
                'name' => 'Pichacani',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 210112,
                'name' => 'Plateria',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 210113,
                'name' => 'San Antonio',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 210114,
                'name' => 'Tiquillaca',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 210115,
                'name' => 'Vilque',
                'province_id' => 2101,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 210201,
                'name' => 'Azángaro',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 210202,
                'name' => 'Achaya',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 210203,
                'name' => 'Arapa',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 210204,
                'name' => 'Asillo',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 210205,
                'name' => 'Caminaca',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 210206,
                'name' => 'Chupa',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 210207,
                'name' => 'José Domingo Choquehuanca',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 210208,
                'name' => 'Muñani',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 210209,
                'name' => 'Potoni',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 210210,
                'name' => 'Saman',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 210211,
                'name' => 'San Anton',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 210212,
                'name' => 'San José',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 210213,
                'name' => 'San Juan de Salinas',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 210214,
                'name' => 'Santiago de Pupuja',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 210215,
                'name' => 'Tirapata',
                'province_id' => 2102,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 210301,
                'name' => 'Macusani',
                'province_id' => 2103,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 210302,
                'name' => 'Ajoyani',
                'province_id' => 2103,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 210303,
                'name' => 'Ayapata',
                'province_id' => 2103,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 210304,
                'name' => 'Coasa',
                'province_id' => 2103,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 210305,
                'name' => 'Corani',
                'province_id' => 2103,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 210306,
                'name' => 'Crucero',
                'province_id' => 2103,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 210307,
                'name' => 'Ituata',
                'province_id' => 2103,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 210308,
                'name' => 'Ollachea',
                'province_id' => 2103,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 210309,
                'name' => 'San Gaban',
                'province_id' => 2103,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 210310,
                'name' => 'Usicayos',
                'province_id' => 2103,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 210401,
                'name' => 'Juli',
                'province_id' => 2104,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 210402,
                'name' => 'Desaguadero',
                'province_id' => 2104,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 210403,
                'name' => 'Huacullani',
                'province_id' => 2104,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 210404,
                'name' => 'Kelluyo',
                'province_id' => 2104,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 210405,
                'name' => 'Pisacoma',
                'province_id' => 2104,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 210406,
                'name' => 'Pomata',
                'province_id' => 2104,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 210407,
                'name' => 'Zepita',
                'province_id' => 2104,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 210501,
                'name' => 'Ilave',
                'province_id' => 2105,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 210502,
                'name' => 'Capazo',
                'province_id' => 2105,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 210503,
                'name' => 'Pilcuyo',
                'province_id' => 2105,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 210504,
                'name' => 'Santa Rosa',
                'province_id' => 2105,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 210505,
                'name' => 'Conduriri',
                'province_id' => 2105,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 210601,
                'name' => 'Huancane',
                'province_id' => 2106,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 210602,
                'name' => 'Cojata',
                'province_id' => 2106,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 210603,
                'name' => 'Huatasani',
                'province_id' => 2106,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 210604,
                'name' => 'Inchupalla',
                'province_id' => 2106,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 210605,
                'name' => 'Pusi',
                'province_id' => 2106,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 210606,
                'name' => 'Rosaspata',
                'province_id' => 2106,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 210607,
                'name' => 'Taraco',
                'province_id' => 2106,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 210608,
                'name' => 'Vilque Chico',
                'province_id' => 2106,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 210701,
                'name' => 'Lampa',
                'province_id' => 2107,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 210702,
                'name' => 'Cabanilla',
                'province_id' => 2107,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 210703,
                'name' => 'Calapuja',
                'province_id' => 2107,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 210704,
                'name' => 'Nicasio',
                'province_id' => 2107,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 210705,
                'name' => 'Ocuviri',
                'province_id' => 2107,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 210706,
                'name' => 'Palca',
                'province_id' => 2107,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 210707,
                'name' => 'Paratia',
                'province_id' => 2107,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 210708,
                'name' => 'Pucara',
                'province_id' => 2107,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 210709,
                'name' => 'Santa Lucia',
                'province_id' => 2107,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 210710,
                'name' => 'Vilavila',
                'province_id' => 2107,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 210801,
                'name' => 'Ayaviri',
                'province_id' => 2108,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 210802,
                'name' => 'Antauta',
                'province_id' => 2108,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 210803,
                'name' => 'Cupi',
                'province_id' => 2108,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 210804,
                'name' => 'Llalli',
                'province_id' => 2108,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 210805,
                'name' => 'Macari',
                'province_id' => 2108,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 210806,
                'name' => 'Nuñoa',
                'province_id' => 2108,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 210807,
                'name' => 'Orurillo',
                'province_id' => 2108,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 210808,
                'name' => 'Santa Rosa',
                'province_id' => 2108,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 210809,
                'name' => 'Umachiri',
                'province_id' => 2108,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 210901,
                'name' => 'Moho',
                'province_id' => 2109,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210902,
                'name' => 'Conima',
                'province_id' => 2109,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 210903,
                'name' => 'Huayrapata',
                'province_id' => 2109,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 210904,
                'name' => 'Tilali',
                'province_id' => 2109,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 211001,
                'name' => 'Putina',
                'province_id' => 2110,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 211002,
                'name' => 'Ananea',
                'province_id' => 2110,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 211003,
                'name' => 'Pedro Vilca Apaza',
                'province_id' => 2110,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 211004,
                'name' => 'Quilcapuncu',
                'province_id' => 2110,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 211005,
                'name' => 'Sina',
                'province_id' => 2110,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 211101,
                'name' => 'Juliaca',
                'province_id' => 2111,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 211102,
                'name' => 'Cabana',
                'province_id' => 2111,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 211103,
                'name' => 'Cabanillas',
                'province_id' => 2111,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 211104,
                'name' => 'Caracoto',
                'province_id' => 2111,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 211105,
                'name' => 'San Miguel',
                'province_id' => 2111,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 211201,
                'name' => 'Sandia',
                'province_id' => 2112,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 211202,
                'name' => 'Cuyocuyo',
                'province_id' => 2112,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 211203,
                'name' => 'Limbani',
                'province_id' => 2112,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 211204,
                'name' => 'Patambuco',
                'province_id' => 2112,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 211205,
                'name' => 'Phara',
                'province_id' => 2112,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 211206,
                'name' => 'Quiaca',
                'province_id' => 2112,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 211207,
                'name' => 'San Juan del Oro',
                'province_id' => 2112,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 211208,
                'name' => 'Yanahuaya',
                'province_id' => 2112,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 211209,
                'name' => 'Alto Inambari',
                'province_id' => 2112,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 211210,
                'name' => 'San Pedro de Putina Punco',
                'province_id' => 2112,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 211301,
                'name' => 'Yunguyo',
                'province_id' => 2113,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 211302,
                'name' => 'Anapia',
                'province_id' => 2113,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 211303,
                'name' => 'Copani',
                'province_id' => 2113,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 211304,
                'name' => 'Cuturapi',
                'province_id' => 2113,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 211305,
                'name' => 'Ollaraya',
                'province_id' => 2113,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 211306,
                'name' => 'Tinicachi',
                'province_id' => 2113,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 211307,
                'name' => 'Unicachi',
                'province_id' => 2113,
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 220101,
                'name' => 'Moyobamba',
                'province_id' => 2201,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 220102,
                'name' => 'Calzada',
                'province_id' => 2201,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 220103,
                'name' => 'Habana',
                'province_id' => 2201,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 220104,
                'name' => 'Jepelacio',
                'province_id' => 2201,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 220105,
                'name' => 'Soritor',
                'province_id' => 2201,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 220106,
                'name' => 'Yantalo',
                'province_id' => 2201,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 220201,
                'name' => 'Bellavista',
                'province_id' => 2202,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 220202,
                'name' => 'Alto Biavo',
                'province_id' => 2202,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 220203,
                'name' => 'Bajo Biavo',
                'province_id' => 2202,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 220204,
                'name' => 'Huallaga',
                'province_id' => 2202,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 220205,
                'name' => 'San Pablo',
                'province_id' => 2202,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 220206,
                'name' => 'San Rafael',
                'province_id' => 2202,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 220301,
                'name' => 'San José de Sisa',
                'province_id' => 2203,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 220302,
                'name' => 'Agua Blanca',
                'province_id' => 2203,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 220303,
                'name' => 'San Martín',
                'province_id' => 2203,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 220304,
                'name' => 'Santa Rosa',
                'province_id' => 2203,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 220305,
                'name' => 'Shatoja',
                'province_id' => 2203,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 220401,
                'name' => 'Saposoa',
                'province_id' => 2204,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 220402,
                'name' => 'Alto Saposoa',
                'province_id' => 2204,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 220403,
                'name' => 'El Eslabón',
                'province_id' => 2204,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 220404,
                'name' => 'Piscoyacu',
                'province_id' => 2204,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 220405,
                'name' => 'Sacanche',
                'province_id' => 2204,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 220406,
                'name' => 'Tingo de Saposoa',
                'province_id' => 2204,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 220501,
                'name' => 'Lamas',
                'province_id' => 2205,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 220502,
                'name' => 'Alonso de Alvarado',
                'province_id' => 2205,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 220503,
                'name' => 'Barranquita',
                'province_id' => 2205,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 220504,
                'name' => 'Caynarachi',
                'province_id' => 2205,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 220505,
                'name' => 'Cuñumbuqui',
                'province_id' => 2205,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 220506,
                'name' => 'Pinto Recodo',
                'province_id' => 2205,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 220507,
                'name' => 'Rumisapa',
                'province_id' => 2205,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 220508,
                'name' => 'San Roque de Cumbaza',
                'province_id' => 2205,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 220509,
                'name' => 'Shanao',
                'province_id' => 2205,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 220510,
                'name' => 'Tabalosos',
                'province_id' => 2205,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 220511,
                'name' => 'Zapatero',
                'province_id' => 2205,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 220601,
                'name' => 'Juanjuí',
                'province_id' => 2206,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 220602,
                'name' => 'Campanilla',
                'province_id' => 2206,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 220603,
                'name' => 'Huicungo',
                'province_id' => 2206,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 220604,
                'name' => 'Pachiza',
                'province_id' => 2206,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 220605,
                'name' => 'Pajarillo',
                'province_id' => 2206,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 220701,
                'name' => 'Picota',
                'province_id' => 2207,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 220702,
                'name' => 'Buenos Aires',
                'province_id' => 2207,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 220703,
                'name' => 'Caspisapa',
                'province_id' => 2207,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 220704,
                'name' => 'Pilluana',
                'province_id' => 2207,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 220705,
                'name' => 'Pucacaca',
                'province_id' => 2207,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 220706,
                'name' => 'San Cristóbal',
                'province_id' => 2207,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 220707,
                'name' => 'San Hilarión',
                'province_id' => 2207,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 220708,
                'name' => 'Shamboyacu',
                'province_id' => 2207,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 220709,
                'name' => 'Tingo de Ponasa',
                'province_id' => 2207,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 220710,
                'name' => 'Tres Unidos',
                'province_id' => 2207,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 220801,
                'name' => 'Rioja',
                'province_id' => 2208,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 220802,
                'name' => 'Awajun',
                'province_id' => 2208,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 220803,
                'name' => 'Elías Soplin Vargas',
                'province_id' => 2208,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 220804,
                'name' => 'Nueva Cajamarca',
                'province_id' => 2208,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 220805,
                'name' => 'Pardo Miguel',
                'province_id' => 2208,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 220806,
                'name' => 'Posic',
                'province_id' => 2208,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 220807,
                'name' => 'San Fernando',
                'province_id' => 2208,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 220808,
                'name' => 'Yorongos',
                'province_id' => 2208,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 220809,
                'name' => 'Yuracyacu',
                'province_id' => 2208,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 220901,
                'name' => 'Tarapoto',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 220902,
                'name' => 'Alberto Leveau',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 220903,
                'name' => 'Cacatachi',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 220904,
                'name' => 'Chazuta',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 220905,
                'name' => 'Chipurana',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 220906,
                'name' => 'El Porvenir',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 220907,
                'name' => 'Huimbayoc',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 220908,
                'name' => 'Juan Guerra',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 220909,
                'name' => 'La Banda de Shilcayo',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 220910,
                'name' => 'Morales',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 220911,
                'name' => 'Papaplaya',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 220912,
                'name' => 'San Antonio',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 220913,
                'name' => 'Sauce',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 220914,
                'name' => 'Shapaja',
                'province_id' => 2209,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 221001,
                'name' => 'Tocache',
                'province_id' => 2210,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 221002,
                'name' => 'Nuevo Progreso',
                'province_id' => 2210,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 221003,
                'name' => 'Polvora',
                'province_id' => 2210,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 221004,
                'name' => 'Shunte',
                'province_id' => 2210,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 221005,
                'name' => 'Uchiza',
                'province_id' => 2210,
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 230101,
                'name' => 'Tacna',
                'province_id' => 2301,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 230102,
                'name' => 'Alto de la Alianza',
                'province_id' => 2301,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 230103,
                'name' => 'Calana',
                'province_id' => 2301,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 230104,
                'name' => 'Ciudad Nueva',
                'province_id' => 2301,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 230105,
                'name' => 'Inclan',
                'province_id' => 2301,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 230106,
                'name' => 'Pachia',
                'province_id' => 2301,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 230107,
                'name' => 'Palca',
                'province_id' => 2301,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 230108,
                'name' => 'Pocollay',
                'province_id' => 2301,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 230109,
                'name' => 'Sama',
                'province_id' => 2301,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 230110,
                'name' => 'Coronel Gregorio Albarracín Lanchipa',
                'province_id' => 2301,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 230111,
                'name' => 'La Yarada los Palos',
                'province_id' => 2301,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 230201,
                'name' => 'Candarave',
                'province_id' => 2302,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 230202,
                'name' => 'Cairani',
                'province_id' => 2302,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 230203,
                'name' => 'Camilaca',
                'province_id' => 2302,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 230204,
                'name' => 'Curibaya',
                'province_id' => 2302,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 230205,
                'name' => 'Huanuara',
                'province_id' => 2302,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 230206,
                'name' => 'Quilahuani',
                'province_id' => 2302,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 230301,
                'name' => 'Locumba',
                'province_id' => 2303,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 230302,
                'name' => 'Ilabaya',
                'province_id' => 2303,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 230303,
                'name' => 'Ite',
                'province_id' => 2303,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 230401,
                'name' => 'Tarata',
                'province_id' => 2304,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 230402,
                'name' => 'Héroes Albarracín',
                'province_id' => 2304,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 230403,
                'name' => 'Estique',
                'province_id' => 2304,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 230404,
                'name' => 'Estique-Pampa',
                'province_id' => 2304,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 230405,
                'name' => 'Sitajara',
                'province_id' => 2304,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 230406,
                'name' => 'Susapaya',
                'province_id' => 2304,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 230407,
                'name' => 'Tarucachi',
                'province_id' => 2304,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 230408,
                'name' => 'Ticaco',
                'province_id' => 2304,
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 240101,
                'name' => 'Tumbes',
                'province_id' => 2401,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 240102,
                'name' => 'Corrales',
                'province_id' => 2401,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 240103,
                'name' => 'La Cruz',
                'province_id' => 2401,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 240104,
                'name' => 'Pampas de Hospital',
                'province_id' => 2401,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 240105,
                'name' => 'San Jacinto',
                'province_id' => 2401,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 240106,
                'name' => 'San Juan de la Virgen',
                'province_id' => 2401,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 240201,
                'name' => 'Zorritos',
                'province_id' => 2402,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 240202,
                'name' => 'Casitas',
                'province_id' => 2402,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 240203,
                'name' => 'Canoas de Punta Sal',
                'province_id' => 2402,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 240301,
                'name' => 'Zarumilla',
                'province_id' => 2403,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 240302,
                'name' => 'Aguas Verdes',
                'province_id' => 2403,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 240303,
                'name' => 'Matapalo',
                'province_id' => 2403,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 240304,
                'name' => 'Papayal',
                'province_id' => 2403,
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 250101,
                'name' => 'Calleria',
                'province_id' => 2501,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 250102,
                'name' => 'Campoverde',
                'province_id' => 2501,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 250103,
                'name' => 'Iparia',
                'province_id' => 2501,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 250104,
                'name' => 'Masisea',
                'province_id' => 2501,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 250105,
                'name' => 'Yarinacocha',
                'province_id' => 2501,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 250106,
                'name' => 'Nueva Requena',
                'province_id' => 2501,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 250107,
                'name' => 'Manantay',
                'province_id' => 2501,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 250201,
                'name' => 'Raymondi',
                'province_id' => 2502,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 250202,
                'name' => 'Sepahua',
                'province_id' => 2502,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 250203,
                'name' => 'Tahuania',
                'province_id' => 2502,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 250204,
                'name' => 'Yurua',
                'province_id' => 2502,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 250301,
                'name' => 'Padre Abad',
                'province_id' => 2503,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 250302,
                'name' => 'Irazola',
                'province_id' => 2503,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 250303,
                'name' => 'Curimana',
                'province_id' => 2503,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 250304,
                'name' => 'Neshuya',
                'province_id' => 2503,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 250305,
                'name' => 'Alexander Von Humboldt',
                'province_id' => 2503,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 250401,
                'name' => 'Purus',
                'province_id' => 2504,
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}