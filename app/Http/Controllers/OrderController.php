<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Book;
use App\Models\Cart_items;
use App\Models\Order_items;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
       public function selected(Request $request){
        $selected=$request->input('books',[]);
        if(!$selected){
          return redirect('cart')->with('error','Вы не выбрали ни одной книги!');
        }

        $order = Order::create([ 'user_id' => Auth::id(),'total_price' => 0, 'status' => 'создан']);
        $total_price = 0;
        foreach($selected as $select){
          $book=Book::find($select);
          $book_cart= Cart_items::where('book_id',$select)->first();
          if($book && $book_cart){
             $order_items=Order_items::create(['order_id' => $order->id, 'book_id' => $select, 'quantity' => $book_cart->quantity]);
          }
         $total_price += $book->price * $book_cart->quantity;
        }
        $order->update(['total_price' => $total_price]);

        return redirect()->route('order.show', ['id' => $order->id]);
    }
    
    public function show($id){
        return Inertia::render('Order/Order',[ 'order' => Order::with('items.book')->findOrFail($id) ]);
    }
    public function success(){
         return Inertia::render('Order/Success',[]);
    }
}
