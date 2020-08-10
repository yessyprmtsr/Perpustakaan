<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        //ngitung data
        $jumlah_author = Author::all()->count();
        $jumlah_book = Book::all()->count();
       return view('admin.home')
            ->with('jumlah_author', $jumlah_author)
            ->with('jumlah_book', $jumlah_book);
    }
}
