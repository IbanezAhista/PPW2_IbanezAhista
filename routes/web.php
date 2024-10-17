<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Auth\LoginRegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BookController::class, 'index']);
Route::get('/buku/create', [BookController::class, 'create']) -> name('buku.create');
Route::post('/buku', [BookController::class, 'store']) -> name('buku.store');
Route::delete('/buku/{id}', [BookController::class, 'destroy']) -> name('buku.destroy');
Route::get('/buku/edit/{id}', [BookController::class, 'edit']) -> name('buku.edit');
Route::post('/buku/update/{id}', [BookController::class, 'update']) -> name('buku.update');

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register')->middleware('guest');
    Route::post('/store', 'store')->name('store')->middleware('guest');
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('auth');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});