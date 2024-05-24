<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::get('/services', [ServiceController::class, 'showServices'])->name('services');
Route::view('/contact', 'contact')->name('contact');
Route::get('/create', [ServiceController::class, 'createServices'])->name('createServices');
