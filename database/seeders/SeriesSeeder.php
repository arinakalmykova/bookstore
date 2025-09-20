<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('series')->insert(  [
    ['name' => 'Война и мир серия'],
    ['name' => 'Преступление и наказание серия'],
    ['name' => 'Русские сказки серия'],
      ]);

    }
}
