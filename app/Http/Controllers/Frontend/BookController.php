<?php

namespace App\Http\Controllers\Frontend;

use App\Author;
use App\Book;
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

        $books = Book::paginate(12);

        return view('home.book',[
            'books' => $books,
        ]);
    }
    public function detail($books)
    {

        $books = Book::where('id', $books)->first();
        return view('home\details',[
            'books' => $books,
        ]);
    }
    public function borrow(Book $book)
    {
        BorrowHistory::create([
            'user_id' => auth()->id(),
            'book_id' => $book->id,
        ]);
        // $user = auth()->user();
        // $user->borrow()->attach($book);

        //  if($user->borrow->where('books.id', $book->id)->count() > 0){
        //     return redirect()->back()->with('toast','You already borrow this book');
        // }

        //ngurangin stok buku
        $book->decrement('qty');
        return redirect()->route('products')->with('toast','You borrowed the book: ' . $book->title);
    //    $user = auth()->user();
    //    $user->borrow()->attach($books);
    //     return 'Ok';
    }
}
