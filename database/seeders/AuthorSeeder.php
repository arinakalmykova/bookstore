<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('author')->insert([
        ['name' => 'Лев Толстой'],
        ['name' => 'Федор Достоевский'],
        ['name' => 'Александр Пушкин'],
    ]);
    }
}
