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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/booking', [App\Http\Controllers\HomeController::class, 'booking'])->name('booking');
Route::get('/gift-card', [App\Http\Controllers\HomeController::class, 'giftCard'])->name('giftcard');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

#Auth::routes();
