<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 101,
                'name' => 'Chachapoyas',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 102,
                'name' => 'Bagua',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 103,
                'name' => 'Bongará',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 104,
                'name' => 'Condorcanqui',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 105,
                'name' => 'Luya',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 106,
                'name' => 'Rodríguez de Mendoza',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 107,
                'name' => 'Utcubamba',
                'department_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 201,
                'name' => 'Huaraz',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 202,
                'name' => 'Aija',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 203,
                'name' => 'Antonio Raymondi',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 204,
                'name' => 'Asunción',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 205,
                'name' => 'Bolognesi',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 206,
                'name' => 'Carhuaz',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 207,
                'name' => 'Carlos Fermín Fitzcarrald',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 208,
                'name' => 'Casma',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 209,
                'name' => 'Corongo',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 210,
                'name' => 'Huari',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 211,
                'name' => 'Huarmey',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 212,
                'name' => 'Huaylas',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 213,
                'name' => 'Mariscal Luzuriaga',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 214,
                'name' => 'Ocros',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 215,
                'name' => 'Pallasca',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 216,
                'name' => 'Pomabamba',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 217,
                'name' => 'Recuay',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 218,
                'name' => 'Santa',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 219,
                'name' => 'Sihuas',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 220,
                'name' => 'Yungay',
                'department_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 301,
                'name' => 'Abancay',
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 302,
                'name' => 'Andahuaylas',
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 303,
                'name' => 'Antabamba',
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 304,
                'name' => 'Aymaraes',
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 305,
                'name' => 'Cotabambas',
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 306,
                'name' => 'Chincheros',
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 307,
                'name' => 'Grau',
                'department_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 401,
                'name' => 'Arequipa',
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 402,
                'name' => 'Camaná',
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 403,
                'name' => 'Caravelí',
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 404,
                'name' => 'Castilla',
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 405,
                'name' => 'Caylloma',
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 406,
                'name' => 'Condesuyos',
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 407,
                'name' => 'Islay',
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 408,
                'name' => 'La Uniòn',
                'department_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 501,
                'name' => 'Huamanga',
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 502,
                'name' => 'Cangallo',
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 503,
                'name' => 'Huanca Sancos',
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 504,
                'name' => 'Huanta',
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 505,
                'name' => 'La Mar',
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 506,
                'name' => 'Lucanas',
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 507,
                'name' => 'Parinacochas',
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 508,
                'name' => 'Pàucar del Sara Sara',
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 509,
                'name' => 'Sucre',
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 510,
                'name' => 'Víctor Fajardo',
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 511,
                'name' => 'Vilcas Huamán',
                'department_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 601,
                'name' => 'Cajamarca',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 602,
                'name' => 'Cajabamba',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 603,
                'name' => 'Celendín',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 604,
                'name' => 'Chota',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 605,
                'name' => 'Contumazá',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 606,
                'name' => 'Cutervo',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 607,
                'name' => 'Hualgayoc',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 608,
                'name' => 'Jaén',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 609,
                'name' => 'San Ignacio',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 610,
                'name' => 'San Marcos',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 611,
                'name' => 'San Miguel',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 612,
                'name' => 'San Pablo',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 613,
                'name' => 'Santa Cruz',
                'department_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 701,
                'name' => 'Prov. Const. del Callao',
                'department_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 801,
                'name' => 'Cusco',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 802,
                'name' => 'Acomayo',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 803,
                'name' => 'Anta',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 804,
                'name' => 'Calca',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 805,
                'name' => 'Canas',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 806,
                'name' => 'Canchis',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 807,
                'name' => 'Chumbivilcas',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 808,
                'name' => 'Espinar',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 809,
                'name' => 'La Convención',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 810,
                'name' => 'Paruro',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 811,
                'name' => 'Paucartambo',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 812,
                'name' => 'Quispicanchi',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 813,
                'name' => 'Urubamba',
                'department_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 901,
                'name' => 'Huancavelica',
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 902,
                'name' => 'Acobamba',
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 903,
                'name' => 'Angaraes',
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 904,
                'name' => 'Castrovirreyna',
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 905,
                'name' => 'Churcampa',
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 906,
                'name' => 'Huaytará',
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 907,
                'name' => 'Tayacaja',
                'department_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1001,
                'name' => 'Huánuco',
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1002,
                'name' => 'Ambo',
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1003,
                'name' => 'Dos de Mayo',
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1004,
                'name' => 'Huacaybamba',
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1005,
                'name' => 'Huamalíes',
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1006,
                'name' => 'Leoncio Prado',
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1007,
                'name' => 'Marañón',
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1008,
                'name' => 'Pachitea',
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1009,
                'name' => 'Puerto Inca',
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1010,
                'name' => 'Lauricocha ',
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1011,
                'name' => 'Yarowilca ',
                'department_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1101,
                'name' => 'Ica ',
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1102,
                'name' => 'Chincha ',
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1103,
                'name' => 'Nasca ',
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1104,
                'name' => 'Palpa ',
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1105,
                'name' => 'Pisco ',
                'department_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1201,
                'name' => 'Huancayo ',
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1202,
                'name' => 'Concepción ',
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1203,
                'name' => 'Chanchamayo ',
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1204,
                'name' => 'Jauja ',
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1205,
                'name' => 'Junín ',
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1206,
                'name' => 'Satipo ',
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1207,
                'name' => 'Tarma ',
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1208,
                'name' => 'Yauli ',
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1209,
                'name' => 'Chupaca ',
                'department_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1301,
                'name' => 'Trujillo ',
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1302,
                'name' => 'Ascope ',
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1303,
                'name' => 'Bolívar ',
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1304,
                'name' => 'Chepén ',
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1305,
                'name' => 'Julcán ',
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1306,
                'name' => 'Otuzco ',
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1307,
                'name' => 'Pacasmayo ',
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1308,
                'name' => 'Pataz ',
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1309,
                'name' => 'Sánchez Carrión ',
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1310,
                'name' => 'Santiago de Chuco ',
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1311,
                'name' => 'Gran Chimú ',
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1312,
                'name' => 'Virú ',
                'department_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1401,
                'name' => 'Chiclayo ',
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1402,
                'name' => 'Ferreñafe ',
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1403,
                'name' => 'Lambayeque ',
                'department_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1501,
                'name' => 'Lima ',
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1502,
                'name' => 'Barranca ',
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1503,
                'name' => 'Cajatambo ',
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1504,
                'name' => 'Canta ',
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1505,
                'name' => 'Cañete ',
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1506,
                'name' => 'Huaral ',
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1507,
                'name' => 'Huarochirí ',
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1508,
                'name' => 'Huaura ',
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1509,
                'name' => 'Oyón ',
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1510,
                'name' => 'Yauyos ',
                'department_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1601,
                'name' => 'Maynas ',
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1602,
                'name' => 'Alto Amazonas ',
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1603,
                'name' => 'Loreto ',
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1604,
                'name' => 'Mariscal Ramón Castilla ',
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1605,
                'name' => 'Requena ',
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1606,
                'name' => 'Ucayali ',
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1607,
                'name' => 'Datem del Marañón ',
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1608,
                'name' => 'Putumayo',
                'department_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1701,
                'name' => 'Tambopata ',
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1702,
                'name' => 'Manu ',
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1703,
                'name' => 'Tahuamanu ',
                'department_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1801,
                'name' => 'Mariscal Nieto ',
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1802,
                'name' => 'General Sánchez Cerro ',
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1803,
                'name' => 'Ilo ',
                'department_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1901,
                'name' => 'Pasco ',
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1902,
                'name' => 'Daniel Alcides Carrión ',
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1903,
                'name' => 'Oxapampa ',
                'department_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 2001,
                'name' => 'Piura ',
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 2002,
                'name' => 'Ayabaca ',
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 2003,
                'name' => 'Huancabamba ',
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 2004,
                'name' => 'Morropón ',
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 2005,
                'name' => 'Paita ',
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 2006,
                'name' => 'Sullana ',
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 2007,
                'name' => 'Talara ',
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 2008,
                'name' => 'Sechura ',
                'department_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 2101,
                'name' => 'Puno ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 2102,
                'name' => 'Azángaro ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 2103,
                'name' => 'Carabaya ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 2104,
                'name' => 'Chucuito ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 2105,
                'name' => 'El Collao ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 2106,
                'name' => 'Huancané ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 2107,
                'name' => 'Lampa ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 2108,
                'name' => 'Melgar ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 2109,
                'name' => 'Moho ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 2110,
                'name' => 'San Antonio de Putina ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 2111,
                'name' => 'San Román ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 2112,
                'name' => 'Sandia ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 2113,
                'name' => 'Yunguyo ',
                'department_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 2201,
                'name' => 'Moyobamba ',
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 2202,
                'name' => 'Bellavista ',
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 2203,
                'name' => 'El Dorado ',
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 2204,
                'name' => 'Huallaga ',
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 2205,
                'name' => 'Lamas ',
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 2206,
                'name' => 'Mariscal Cáceres ',
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 2207,
                'name' => 'Picota ',
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 2208,
                'name' => 'Rioja ',
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 2209,
                'name' => 'San Martín ',
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 2210,
                'name' => 'Tocache ',
                'department_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 2301,
                'name' => 'Tacna ',
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 2302,
                'name' => 'Candarave ',
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 2303,
                'name' => 'Jorge Basadre ',
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 2304,
                'name' => 'Tarata ',
                'department_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 2401,
                'name' => 'Tumbes ',
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 2402,
                'name' => 'Contralmirante Villar ',
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 2403,
                'name' => 'Zarumilla ',
                'department_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 2501,
                'name' => 'Coronel Portillo ',
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 2502,
                'name' => 'Atalaya ',
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 2503,
                'name' => 'Padre Abad ',
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 2504,
                'name' => 'Purús',
                'department_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}