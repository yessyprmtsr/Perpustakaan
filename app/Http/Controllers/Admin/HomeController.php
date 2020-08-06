<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function author(){
        //ngitung data
        $jumlah_author = Author::all()->count();
       return view('admin.home')->with('jumlah_author', $jumlah_author);
    }
    // public function books(){
    //     //ngitung data
    //     $jumlah_author = Author::all()->count();
    //    return view('admin.home')->with('jumlah_author', $jumlah_author);
    // }
    // public function user(){
    //     //ngitung data
    //     $jumlah_author = Author::all()->count();
    //    return view('admin.home')->with('jumlah_author', $jumlah_author);
    // }
}
