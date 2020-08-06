<?php

use Illuminate\Support\Facades\Route;
//dashboard admin
Route::get('/', 'HomeController@index')->name('dashboard');
//home admin
Route::get('/author','AuthorController@index')->name('author.index');
//data admin
Route::get('/author/data','DataController@authors')->name('author.data');
