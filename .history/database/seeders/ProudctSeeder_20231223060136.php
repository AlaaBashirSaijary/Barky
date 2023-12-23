<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProudctSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('proudcts')->insert([
            'type' => "cookies",
            'image' => "banner.jpg",
            'subtitle' => "some Cookies",
            'price' =>"15$",
            'descrption' =>"lab alakcj$",
            'deliveryDate' =>'2023-12-06',
        ],
        [
            'type' => "Breads",
            'image' => "banner.jpg",
            'subtitle' => "some Cookies",
            'price' =>"15$",
            'descrption' =>"lab alakcj$",
            'deliveryDate' =>'2023-12-06',
        ],
        [
            'type' => "cakes",
            'image' => "banner.jpg",
            'subtitle' => "some Cookies",
            'price' =>"15$",
            'descrption' =>"lab alakcj$",
            'deliveryDate' =>'2023-12-06',
        ],
        [
            'type' => "Rolls",
            'image' => "banner.jpg",
            'subtitle' => "some Cookies",
            'price' =>"15$",
            'descrption' =>"lab alakcj$",
            'deliveryDate' =>'2023-12-06',
        ],
        [
            'type' => "Ponuts",
            'image' => "banner.jpg",
            'subtitle' => "some Cookies",
            'price' =>"15$",
            'descrption' =>"lab alakcj$",
            'deliveryDate' =>'2023-12-06',
        ],
        [
            'type' => "Cupcakes",
            'image' => "banner.jpg",
            'subtitle' => "some Cookies",
            'price' =>"15$",
            'descrption' =>"lab alakcj$",
            'deliveryDate' =>'2023-12-06',
        ]);
    }
}
