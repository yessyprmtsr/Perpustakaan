<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Frontend\BookController@index');
Route::get('/books','Frontend\BookController@book')->name('book');
Route::get('/details/{id}','Frontend\BookController@detail')->name('detail');
Route::get('/catalog', function () {
    return view('home.book');
});


Route::get('/user', function () {
    return view('user.index');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
