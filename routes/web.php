<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/products', function () {
        return view('products');
    })->name('products');
    Route::get('/feedbacks', function () {
        return view('feedbacks');
    })->name('feedbacks');
    Route::get('/popular-categories', function () {
        return view('popular-categories');
    })->name('popular-categories');
    Route::get('/search', function () {
        return view('search');
    })->name('search');
});
