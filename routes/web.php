<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage'); // Not welcome.blade.php
});

Route::get('/destinations', function () {
    return view('destinations');
});
Route::get('/book', function () {
    return view('book');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/reviews', function () {
    return view('reviews');
});
