<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [

            [
                'address'=>'Taman Surya 2',
                'province'=>'Jakarta Barat',
                'address_detail'=> 'Taman Surya 2 Blok B1 No. 25, RT. 2/RW. 20, Pegadungan, Kec. Kalideres, Jakarta Barat, 11830',
                'rating'=> 4.8,
                'price'=>'50.000',
                'photo'=>'image1.png',
                'host_id'=>1,
                'animal_id'=>3
            ],
            [
                'address'=>'Citra 3',
                'province'=>'Jakarta Barat',
                'address_detail'=> 'Citra 3 Blok B2 No. 30, RT. 1/RW. 18, Pegadungan, Kec. Kalideres, Jakarta Barat, 11930',
                'rating'=> 4.5,
                'price'=>'45.000',
                'photo'=>'image2.png',
                'host_id'=>2,
                'animal_id'=>3
            ],
            [
                'address'=>'Green Garden',
                'province'=>'Jakarta Barat',
                'address_detail'=> 'Green Garden Blok B3 No. 31, RT. 5/RW. 14, Pegadungan, Kec. Kalideres, Jakarta Barat, 11730',
                'rating'=> 5.0,
                'price'=>'65.000',
                'photo'=>'image3.png',
                'host_id'=>3,
                'animal_id'=>2
            ],
            [
                'address'=>'Puloraya IV',
                'province'=>'Jakarta Selatan',
                'address_detail'=>'Puloraya IV, Jln. Pulo Raya I - VIII, Kel. Petogogan, Kec. Kebayoran Baru, Jakarta Selatan, 12330',
                'rating'=> 4.9,
                'price'=>'62.000',
                'photo'=>'image4.png',
                'host_id'=>4,
                'animal_id'=>2
            ],
            [
                'address'=>'Nusantara 10',
                'province'=>'Jakarta Utara',
                'address_detail'=> 'Nusantara 10, Sunter Agung, Tanjung Priok, Jakarta Utara, Jakarta 14350',
                'rating'=> 4.2,
                'price'=>'53.000',
                'photo'=>'image5.png',
                'host_id'=>5,
                'animal_id'=>1
            ],
            [
                'address'=>'Janur Asri VII',
                'province'=>'Jakarta Utara',
                'address_detail'=> 'Janur Asri VII, RT.10/RW.13, Klp.Gading Barat, Kec.Klp Gading, Jakarta Utara, Jakarta 14250',
                'rating'=> 4.1,
                'price'=>'48.000',
                'photo'=>'image6.png',
                'host_id'=>6,
                'animal_id'=>1
            ]

        ];

        DB::table('infos')->insert($datas);
    }
}
