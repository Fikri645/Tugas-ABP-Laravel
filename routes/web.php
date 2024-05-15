<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'form_login')->name('login');

Route::get('/lihat-data', 'App\Http\Controllers\SiteController@view_data');
Route::post('/auth', 'App\Http\Controllers\SiteController@autentikasi');
Route::get('/logout', 'App\Http\Controllers\SiteController@logout');

Route::resource('product', ProductController::class)->middleware('auth');

Route::get('/lat1', 'App\Http\Controllers\Lat1Controller@index');

Route::get('/lat1/m2', 'App\Http\Controllers\Lat1Controller@method2'); 
