<?php

namespace App\Http\Controllers\Frontend;

use App\Books;
use App\Http\Controllers\Controller;
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
    public function detail($id)
    {
        $books = Books::where('id', $id)->first();
        return view('home\details',[
            'books' => $books,
        ]);
    }
}
