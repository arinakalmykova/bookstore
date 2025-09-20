<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_items extends Model
{
     protected $table = 'order_items';
     protected $fillable = ['order_id', 'book_id', 'quantity'];
     public function order() {
        return $this->belongsTo(Order::class);
    }

     public function book() {
        return $this->belongsTo(Book::class);
    }
}
