<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryCoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [['menu_id' => 1,'category_id' => 1,],
                ['menu_id' => 2, 'category_id' => 1,],
                ['menu_id' => 3, 'category_id' => 1,],
                ['menu_id' => 4, 'category_id' => 1,],
                ['menu_id' => 5, 'category_id' => 2,],
                ['menu_id' => 6, 'category_id' => 2,],];

        DB::table('category_coffees')->insert($data);
    }
}
