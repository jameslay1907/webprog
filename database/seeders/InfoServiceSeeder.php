<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [

            ['info_id'=>1, 'service_id'=>1],
            ['info_id'=>1, 'service_id'=>2],
            ['info_id'=>2, 'service_id'=>2],
            ['info_id'=>3, 'service_id'=>2],
            ['info_id'=>4, 'service_id'=>2],
            ['info_id'=>5, 'service_id'=>2],
            ['info_id'=>6, 'service_id'=>2],

        ];

        DB::table('info_service')->insert($datas);
    }
}
