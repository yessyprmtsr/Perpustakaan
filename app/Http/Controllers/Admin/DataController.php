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
                            ->addColumn('action','admin.author.action')
                            ->toJson();
    }

}
