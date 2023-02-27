<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([[
            'name'=>'Samsung TV',
            "price"=>"20000",
            "description"=>"A samrt TV with Ultra Pix & HDR.",
            "category"=>"tv",
            "gallery"=>"https://images.samsung.com/is/image/samsung/in-full-hd-tv-t5500-ua43t5500akxxl-ua--r----auxxl-227105592?$1300_1038_PNG$"
        ],
        [
            'name'=>'LG TV',
            "price"=>"25000",
            "description"=>"Dolby Audio™ A Movie-like Sound Experience.",
            "category"=>"tv",
            "gallery"=>"https://www.lg.com/africa/images/tvs/md06216836/gallery/1100_1.jpg"
        ],
        [
            'name'=>'Panasonic Fridge',
            "price"=>"50000",
            "description"=>"Frost-Free Double-Door Refrigerator.",
            "category"=>"fridge",
            "gallery"=>"https://static-01.daraz.com.np/p/d1e228b3993b6bcda83b3b7dc04b06a3.jpg"
        ]
        ]);
    }
}
