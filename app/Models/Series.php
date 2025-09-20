<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
     protected $table = 'series';
     public function book() {
        return $this->hasMany(Book::class);
    }
}
