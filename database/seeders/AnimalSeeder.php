<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [

            ['name'=>'Bird'],
            ['name'=>'Cat'],
            ['name'=>'Dog'],

        ];

        DB::table('animals')->insert($datas);
    }
}
