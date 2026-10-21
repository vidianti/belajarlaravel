<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;


Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/movies', [HomeController::class, 'index'])->name('Movies');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.dashboard')->name('dashboard');
    Route::view('/produk', 'admin.produk')->name('produk');
    Route::view('/chart', 'admin.chart')->name('chart');
});
