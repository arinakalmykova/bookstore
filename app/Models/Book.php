<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
   public function author()
{
    return $this->belongsTo(Author::class);
}

public function publisher()
{
    return $this->belongsTo(Publisher::class);
}

public function series()
{
    return $this->belongsTo(Series::class);
}

public function genre()
{
    return $this->belongsTo(Genre::class);
}

public function cartItems()
{
    return $this->hasMany(Cart_items::class);
}

public function orderItems()
{
    return $this->hasMany(Order_items::class);
}

}
