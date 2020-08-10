<?php

use Illuminate\Support\Facades\Route;
//dashboard admin
Route::get('/', 'HomeController@index')->name('dashboard');
//home author
// Route::get('/author','AuthorController@index')->name('author.index');
// //create author
// Route::get('/author/create','AuthorController@create')->name('author.create');
// //tambah author data
// Route::post('/author', 'AuthorController@store')->name('author.store');
// //edit author
// Route::get('/author/{author}/edit', 'AuthorController@edit')->name('author.edit');
// Route::put('/author/{author}/update', 'AuthorController@update')->name('author.update');
// //delete
// Route::delete('/author/{author}', 'AuthorController@destroy')->name('author.destroy');
// //admin


//data author
Route::get('/author/data','DataController@authors')->name('author.data');
//route resource
Route::resource('author', 'AuthorController');
// data books
Route::get('/book/data','DataController@books')->name('book.data');
//route crud book
Route::resource('book', 'BookController');
//route borrow admin
Route::get('borrow','BorrowController@index')->name('borrow.index');
Route::get('borrow/{borrowHistory}/return','BorrowController@returnBook')->name('borrow.return');
Route::put('borrow/{borrowHistory}/return','BorrowController@returnBook')->name('borrow.return');
Route::get('/borrow/data', 'DataController@borrows')->name('borrow.data');
//route report
Route::get('report/top-book','ReportController@topBook')->name('report.top-book');
Route::get('report/top-book','ReportController@topBook')->name('report.top-book');
