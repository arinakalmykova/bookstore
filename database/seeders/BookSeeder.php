<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{

    public function run(): void
    {
 DB::table('book')->truncate();
   DB::table('book')->insert([
    [
        'title' => 'Война и мир',
        'author_id' => 1,
        'series_id' => 1,
        'genre_id' => 1,
        'publisher_id' => 1,
        'year' => 1869,
        'price' => 999.99,
        'img' =>'https://cdn1.ozone.ru/s3/multimedia-1-y/7328612434.jpg'
    ],
    [
        'title' => 'Преступление и наказание',
        'author_id' => 2,
        'series_id' => 2,
        'genre_id' => 2,
        'publisher_id' => 2,
        'year' => 1866,
        'price' => 799.99,
        'img' =>'https://book24.kz/upload/iblock/083/083cb905b5e646f01ab2cdc3d8109781.jpg'
    ],
    [
        'title' => 'Руслан и Людмила',
        'author_id' => 3,
        'series_id' => 3,
        'genre_id' => 3,
        'publisher_id' => 3,
        'year' => 1820,
        'price' => 499.99,
         'img' =>'https://i.pinimg.com/736x/86/af/44/86af44b38ea25285bd10455e1b25bad4.jpg'
    ],
]);


    }
}
