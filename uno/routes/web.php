<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ThingController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/about', [ThingController::class, 'index'])->name('about');
Route::get('/createAbout', [ThingController::class, 'create'])->name('createAbout');
Route::get('/services', [ServiceController::class, 'showServices'])->name('services');
Route::view('/contact', 'contact')->name('contact');
Route::get('/create', [ServiceController::class, 'createServices'])->name('createServices');

Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');
Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note.show');
Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');

Route::resource('/post', PostController::class);

Route::resource('/product', ProductController::class);
