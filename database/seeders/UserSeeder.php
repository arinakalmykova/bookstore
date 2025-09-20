<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
       DB::table('users')->truncate();

DB::table('users')->insert([
    'name' => 'Test User',
    'email' => 'test@example.com',
    'email_verified_at' => now(),
    'password' => Hash::make('password'),
    'remember_token' => '123456',
    'created_at' => now(),
    'updated_at' => now()
]);

    }
}
