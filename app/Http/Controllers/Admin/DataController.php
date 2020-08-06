<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function authors(){
        //passing parameter
        $authors = Author::query();
        return datatables()->of($authors)
                            //nambah ruting ke edit
                            ->addColumn('action', function(Author $author){
                                return '<a href="'. route('admin.author.edit',$author).'" class="btn btn-outline-warning" > Edit</a>';
                            })
                            ->toJson();
    }
}
