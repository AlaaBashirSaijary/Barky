<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'descrption' =>"la$",
            'price' =>"15$",
        ]);
    }
}
