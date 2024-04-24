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
Route::get('/booking', [App\Http\Controllers\BookingController::class, 'index'])->name('booking');
Route::post('/booking', [App\Http\Controllers\BookingController::class, 'book'])->name('booking.submit');
Route::post('/check-slot', [App\Http\Controllers\BookingController::class, 'checkSlot'])->name('check_slot');
Route::get('/gift-card', [App\Http\Controllers\HomeController::class, 'giftCard'])->name('giftcard');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/booking/pay/success', [App\Http\Controllers\BookingController::class, 'paymentSuccess'])->name('booking.success');
Route::get('/booking/pay/cancel', [App\Http\Controllers\BookingController::class, 'paymentCancel'])->name('booking.cancel');

#Auth::routes();

Route::get('/mailable', function() {
    $booking = [];
    $booking['firstname'] = 'John';
    $booking['lastname'] = 'Doe';
    $booking['phone'] = '08093373463';
    $booking['car_make'] = 'Honda Accord 2015';
    $booking['date'] = '2024-04-25';
    $booking['hour'] = 12;
    $booking['package'] = 1;
    return new \App\Mail\SendBookingMail($booking);
});