<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('teams')->insert([
            'name' => "alaaSaijary",
            'email' => 'alaaSaijary@gmail.com',
            'description' => "Macker Cookies",
            'image'=>"1.jpg",
            'soicalMedia' =>"facbook:alaaSaijary",
            'name' => "RamaSaijary",
            'email' => 'RamaSaijary@gmail.com',
            'description' => "Macker Cookies",
            'image'=>"1.jpg",
            'soicalMedia' =>"facbook:RamaSaijary",
        ]);
    }
}
