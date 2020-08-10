<?php

namespace App\Http\Controllers;

use App\Book;
use App\Books;
use App\BorrowHistory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $books = BorrowHistory::paginate(12);
        $books = auth()->user()->borrow;

        return view('home.mybook',[
            'title' => 'Homepage | My Book',
            'books' => $books,
        ]);
    }
}
