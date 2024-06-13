<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portofolio.home');
});

Route::get('/blog/about', function () {
    return view('portofolio.about');
});

Route::get('/blog/portofolio', function () {
    return view('portofolio.portofolio');
});

Route::get('/blog/contact', function () {
    return view('portofolio.contact');
});
