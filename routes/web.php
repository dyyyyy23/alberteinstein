<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/resume', function () {
    return view('pages.resume');
});

Route::get('/portofolio', function () {
    return view('pages.portofolio');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/welcome', function () {
    return view('welcome');
});

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
// Jika menggunakan method 'show' bukan 'index'
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

// Atau jika ingin menggunakan 'index'
Route::get('/contact', [ContactController::class, 'index'])->name('contact');