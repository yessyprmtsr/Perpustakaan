<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Books;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.book.index',[
            'title' => 'Perpustakaan | Book Data'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.create',[
            'title' => 'Perpustakaan | Add Book Data',
            'authors' => Author::orderBy('name','ASC')->get(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'author_id' => 'required',
            'cover' => 'file|image',
            'qty' => 'required'
        ]);
        //kalau gaada cover
        $cover = null;
        //simpan gambar
        if($request->hasFile('cover')){
           $cover = $request->file('cover')->store('public/assets/covers');
        }
        //untuk fungsi create
        Books::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'cover' => $cover,
            'qty' => $request->qty,
        ]);
        return redirect()->route('admin.book.index')->withSuccess('Books data has been saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $book)
    {
        return view('admin.book.edit',[
            'title' => 'Perpustakaan|Ubah data buku',
            'book' => $book,
            'authors' => Author::orderBy('name','ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $book)
    {
        //validasi
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'author_id' => 'required',
            'cover' => 'file|image',
            'qty' => 'required'
        ]);
        //kalau gada tetep pakek cover itu
        $cover = $book->cover;
        //simpan gambar
        if($request->hasFile('cover')){
            //menghapus gambar lma
            Storage::delete($book->cover);
           $cover = $request->file('cover')->store('public/assets/covers');
        }
        //untuk fungsi create
        $book->update([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'cover' => $cover,
            'qty' => $request->qty,
        ]);
        return redirect()->route('admin.book.index')->withSuccess('Books data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $book)
    {

    }
}
