<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MilkyController;
use App\Http\Controllers\MilkController;
use App\Mail\PaymentsMail;
use App\Mail\ContactMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [MilkyController::class, 'home']);
Route::get('/home/product', [MilkyController::class, 'product']);
Route::get('/home/read_more', [MilkyController::class, 'more']);
Route::get('/home/profile', [MilkyController::class, 'about']);

Route::get('/home/contact', [MilkyController::class, 'contact']);
Route::post('/home/contact', [MilkyController::class, 'contactSubmit'])->name('contact.submit');

// Admin Routes
Route::resource('milk', MilkController::class);

Route::get('/home/cart/{id}', [MilkyController::class, 'addToCart']);
Route::get('/home/cart', [MilkyController::class, 'cart']);
Route::get('/home/cart/hapus/{id}', [MilkyController::class, 'removeCart']);
Route::post('/home/payment', [MilkyController::class, 'paymentSubmit'])->name('payment.submit');