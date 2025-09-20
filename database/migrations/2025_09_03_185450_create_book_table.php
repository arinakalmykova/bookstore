<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
       Schema::create('book',function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('publisher_id');
            $table->unsignedBigInteger('series_id')->nullable();
            $table->unsignedBigInteger('genre_id');
            $table->foreign('author_id')->references('id')->on('author')->onDelete('cascade');
            $table->foreign('publisher_id')->references('id')->on('publisher')->onDelete('cascade');
            $table->foreign ('series_id')->references('id')->on('series')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');
            $table->integer('year');
            $table->string('img');
            $table->decimal('price',8,2);
            $table->timestamps();
        });
     
    }

    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
