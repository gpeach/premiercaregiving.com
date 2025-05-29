<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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


Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
