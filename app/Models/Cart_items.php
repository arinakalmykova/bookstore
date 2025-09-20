<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart_items extends Model
{
     protected $table = 'cart_items';

       protected $fillable = [
        'book_id','cart_id','quantity'
    ];

    public function cart() {
        return $this->belongsTo(Cart::class);
    }

    public function book() {
        return $this->belongsTo(Book::class);
    }
}
