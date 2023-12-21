<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'email' => Str::random(10).'@gmail.com',
            'description' => "Macker Cookies",
            'soicalMedia' =>"faalaaSaijary",
        ]);
    }
}
