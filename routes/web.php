<?php

use Illuminate\Support\Facades\Route;

// Rotte
Route::get('/', function () {
    $data = config('store');
    return view('homepage', $data);
});

Route::get('/home', function () {
    $data = config('store');
    return view('homepage', $data);
});

Route::get('/about', function () {
    $data = config('store');
    return view('about', $data);
});
