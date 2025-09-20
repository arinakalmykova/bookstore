<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cart_itemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('cart_items')->insert(  [
            ['cart_id' => 1, 'book_id' => 1, 'quantity' => 1],
    ['cart_id' => 2, 'book_id' => 2, 'quantity' => 2],
    ['cart_id' => 3, 'book_id' => 3, 'quantity' => 1],
      ]);

    }
}
