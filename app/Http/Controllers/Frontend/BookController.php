<?php

namespace App\Http\Controllers\Frontend;

use App\Author;
use App\Books;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('home.homepage');
    }
    public function book()
    {

        $books = Books::paginate(12);

        return view('home.book',[
            'books' => $books,
        ]);
    }
    public function detail($books)
    {

        $books = Books::where('id', $books)->first();
        return view('home\details',[
            'books' => $books,
        ]);
    }
    public function borrow(Books $book)
    {
        BorrowHistory::create([
            'user_id' => auth()->id(),
            'book_id' => $book->id,
        ]);
        //ngurangin stok buku
        $book->decrement('qty');
        return redirect()->route('book')->with('toast','You borrowed the book');
    //    $user = auth()->user();
    //    $user->borrow()->attach($books);
    //     return 'Ok';
    }
}
