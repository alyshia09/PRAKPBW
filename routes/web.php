<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view('welcome');
});

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/Kontak-kami', function () {
    return view('contact');
});