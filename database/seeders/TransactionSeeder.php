<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [['user_id' => 1, 'menu_id' => 1, 'created_at' => "2023-03-19"],
                ['user_id' => 1, 'menu_id' => 2, 'created_at' => "2023-03-20"],
                ['user_id' => 1, 'menu_id' => 4, 'created_at' => "2023-03-21"],
                ['user_id' => 2, 'menu_id' => 3, 'created_at' => "2023-03-18"],
                ['user_id' => 2, 'menu_id' => 5, 'created_at' => "2023-03-19"],
                ['user_id' => 2, 'menu_id' => 6, 'created_at' => "2023-03-21"],];

        DB::table('transactions')->insert($data);
    }
}
