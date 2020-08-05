<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.templates.index');
})->name('dashboard');
