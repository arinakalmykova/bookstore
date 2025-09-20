<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookController extends Controller
{

    public function catalog(){
        return Inertia::render('Books/Catalog', [
            'books' => Book::all()
        ]);
    }

   public function detail($id){
    $book = Book::with(['series', 'genre', 'author', 'publisher'])->findOrFail($id);

    return Inertia::render('Books/Detail', [
        'book' => $book
    ]);
}

}
