<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [['name' => 'Vico Lomar',],
                ['name' => 'Fei Fei Li',],];

        DB::table('users')->insert($data);
    }
}
