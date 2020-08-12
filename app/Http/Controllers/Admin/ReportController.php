<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Session;

class ReportController extends Controller
{
    public function topBook(){
        $books= Book::withCount('borrowed')
                    ->orderBy('borrowed_count','desc')
                    ->paginate(10);

        return view('admin.report.top-book',[
            'books' => $books,
        ]);
    }
    public function topUser(){
        $users= User::withCount('borrow')
                    ->orderBy('borrow_count','desc')
                    ->paginate(10);

        return view('admin.report.top-user',[
            'users' => $users,
        ]);
    }
    public function cetak(){
      $data = Book::withCount('borrowed')
            ->orderBy('borrowed_count','desc')
            ->get();
      if(is_null($data)){
          Session::flash('flash_message',[
              'warna'=>'alert-danger',
              'message'=>'Empty Data'
          ]);
          return redirect()->route('admin.report.top-book');
        } else {
            $title = "Report Library";
            $pdf = PDF::LoadView('admin.report.cetak', compact('data'));
            $pdf->setPaper('A4','potrait');
            return $pdf->stream($title, array('Attachment' => false));
        }
      }
    }

