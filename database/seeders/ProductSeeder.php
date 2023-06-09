<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Samsung Mobile',
                'price' => '£799',
                'description' => 'The best smartphone on the market & more!!!',
                'category' => 'Mobile',
                'gallery' => 'https://images.samsung.com/is/image/samsung/assets/uk/smartphones/galaxy-s23-ultra/stuffreview_DT.jpg?$ORIGIN_JPG$',
            ],
            [
                'name' => 'Samsung TV',
                'price' => '£1099',
                'description' => 'The best TV on the market & more!!!',
                'category' => 'TV',
                'gallery' => 'https://images.samsung.com/is/image/samsung/p6pim/uk/qe55ls03bguxxu/gallery/uk-the-frame-qe55ls03bguxxu-frame-lifestyle-city-536657792?$1300_1038_PNG$',
            ]

        ]);

    }
}
