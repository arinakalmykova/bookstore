<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cart_items;
use Inertia\Inertia;

class CartController extends Controller
{
    public function add($id){
        $book = Cart_items::where('book_id',$id)->first();
        
        if($book){
            $book->increment('quantity');
        }
        else {
            Cart_items::create(['book_id' => $id, 'cart_id' => 1,'quantity' => 1 ]);
        }
        return redirect('/cart');
    }

    public function show(){
        $books=Cart_items::with(['book'])->get();
         return Inertia::render('Cart/Cart',[
            'books'=> $books
        ]);
    }

     public function delete($id){
        $book = Cart_items::where('book_id',$id)->first();
        if( $book->quantity > 1){
            $book->decrement('quantity');
        }
        else {
            $book->delete();
        }
        return redirect('/cart');
    }
}
