<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function authors(){
        //passing parameter
        $authors = Author::orderBy('name','ASC');
        return datatables()->of($authors)
                            //nambah ruting ke edit
                            ->addIndexColumn()
                            ->addColumn('action','admin.author.action')
                            ->toJson();
    }
    //boooks
    public function books(){
        //passing parameter
        $books = Book::orderBy('title','ASC');
        return datatables()->of($books)
                            //nambahin author kolom
                            ->addColumn('author', function(Book $model){
                                return $model->author->name;
                            })
                            //nambahin cover image
                            ->editColumn('cover', function(Book $model){
                                return '<img src="'.$model->getCover().'" height="100px">';
                            })
                            //nambah ruting ke edit
                            ->addIndexColumn()
                            ->addColumn('action','admin.book.action')
                            //biar image keluar
                            ->rawColumns(['cover','action'])
                            ->toJson();
    }
    public function borrows(){
        //untuk nampilin peminjaman dari user
        $borrows = BorrowHistory::latest();
        return datatables()->of($borrows)
                            ->addColumn('user', function(BorrowHistory $model){
                                        return $model->user->name;
                                    })
                            ->addColumn('book_title', function(BorrowHistory $model){
                                        return $model->book->title;
                                    })
                            ->addIndexColumn()
                            ->addColumn('action','admin.borrow.action')
                            ->toJson();
    }

}
