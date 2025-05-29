<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/bio', function () {
    return view('bio');
});

Route::get('/contact', function () {
    return view('contact');
});
