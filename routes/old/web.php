<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'login_form')->name('login');

Route::get('/lihat-data', [SiteController::class, 'view_data']);
Route::post('/auth', [SiteController::class, 'autentikasi']);
Route::post('/logout', [SiteController::class, 'logout']);
Route::resource('produk', ProductController::class)->middleware('auth');