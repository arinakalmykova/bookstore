<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('orders')->insert([
        ['user_id' => 1, 'total_price' => 1000, 'status' => 'создан'],
    ['user_id' => 1, 'total_price' => 2000, 'status' => 'создан'],
    ['user_id' => 1, 'total_price' => 1500, 'status' => 'создан'],]);
    }
}
