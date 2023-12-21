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
            'type' => "co",
            'email' => Str::random(10).'@gmail.com',
            'description' => "Macker Cookies",
            'soicalMedia' =>"facbook:alaaSaijary",
        ]);
    }
}
