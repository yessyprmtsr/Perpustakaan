<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('/author','AuthorController@index')->name('author.index');
