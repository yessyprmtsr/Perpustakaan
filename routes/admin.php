<?php

use Illuminate\Support\Facades\Route;
//dashboard admin
Route::get('/', 'HomeController@index')->name('dashboard');
//home author
Route::get('/author','AuthorController@index')->name('author.index');
//data author
Route::get('/author/data','DataController@authors')->name('author.data');
//create author
Route::get('/author/create','AuthorController@create')->name('author.create');
//tambah author data
Route::post('/author', 'AuthorController@store')->name('author.store');
//edit author
Route::get('/author/{author}/edit', 'AuthorController@edit')->name('author.edit');
Route::put('/author/{author}/update', 'AuthorController@update')->name('author.update');
