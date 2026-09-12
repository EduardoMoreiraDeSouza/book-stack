<?php

use Illuminate\Support\Facades\Route;


// Homepage
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/books', function() {
    return view('books.index');
})->name('books.index');
