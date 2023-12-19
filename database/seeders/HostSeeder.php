<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            [
                'name'=>'Host1',
                'year'=> 1,
                'review'=> 50,
                'message'=>'In this naturally cool apartment in summer, enjoying
                a private garden of absolute calm (except for
                birdsong!!!), easy to park, in the heart of Lyon, I
                would love to welcome you. You can discover our
                wonderful Croix Rousse hill: as mythical as it is
                surprising. Welcome to Lyon!!!',
            ],
            [
                'name'=>'Host2',
                'year'=> 2,
                'review'=> 55,
                'message'=>'In this naturally cool apartment in summer, enjoying
                a private garden of absolute calm (except for
                birdsong!!!), easy to park, in the heart of Lyon, I
                would love to welcome you. You can discover our
                wonderful Croix Rousse hill: as mythical as it is
                surprising. Welcome to Lyon!!!',
            ],
            [
                'name'=>'Host3',
                'year'=> 3,
                'review'=> 60,
                'message'=>'In this naturally cool apartment in summer, enjoying
                a private garden of absolute calm (except for
                birdsong!!!), easy to park, in the heart of Lyon, I
                would love to welcome you. You can discover our
                wonderful Croix Rousse hill: as mythical as it is
                surprising. Welcome to Lyon!!!',
            ],
            [
                'name'=>'Host4',
                'year'=>0,
                'review'=> 50,
                'message'=>'In this naturally cool apartment in summer, enjoying
                a private garden of absolute calm (except for
                birdsong!!!), easy to park, in the heart of Lyon, I
                would love to welcome you. You can discover our
                wonderful Croix Rousse hill: as mythical as it is
                surprising. Welcome to Lyon!!!',
            ],
            [
                'name'=>'Host5',
                'year'=>2,
                'review'=> 40,
                'message'=>'In this naturally cool apartment in summer, enjoying
                a private garden of absolute calm (except for
                birdsong!!!), easy to park, in the heart of Lyon, I
                would love to welcome you. You can discover our
                wonderful Croix Rousse hill: as mythical as it is
                surprising. Welcome to Lyon!!!',
            ],
            [
                'name'=>'Host6',
                'year'=>3,
                'review'=> 100,
                'message'=>'In this naturally cool apartment in summer, enjoying
                a private garden of absolute calm (except for
                birdsong!!!), easy to park, in the heart of Lyon, I
                would love to welcome you. You can discover our
                wonderful Croix Rousse hill: as mythical as it is
                surprising. Welcome to Lyon!!!',
            ]
        ];

        DB::table('hosts')->insert($datas);

    }
}
