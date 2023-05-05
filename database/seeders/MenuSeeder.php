<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [['nama' => 'Butterbeer', 'images' => 'menu1.jpg'],
                ['nama' => 'Pumpkin Juice', 'images' => 'menu2.jpg'],
                ['nama' => 'Gillywater', 'images' => 'menu3.jpg'],
                ['nama' => 'Iced Latte', 'images' => 'menu4.jpg'],
                ['nama' => 'Iced Coffee', 'images' => 'menu5.jpg'],
                ['nama' => 'Iced Tea', 'images' => 'menu6.jpg'],];

        DB::table('menus')->insert($data);
    }
}
