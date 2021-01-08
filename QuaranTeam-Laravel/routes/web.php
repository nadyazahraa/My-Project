<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Product;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesmanController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cashier/order', [CashierController::class, 'index']);

// Route::get('/cashier/detailOrder/{orderId}', [CashierController::class, 'detail']);
Route::get('/salesman',[SalesmanController::class, 'index']);

Route::get('/cashier/detailOrder', [CashierController::class, 'detail']);

Route::resource('product', ProductController::class);
Route::get('/admin/deleteProduct/{productId}', [ProductController::class, 'destroy']);


Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/add', [AdminController::class, 'add']);
Route::get('/admin/addUser', [AdminController::class, 'addUser']);
Route::get('/admin/delete/{userId}', [AdminController::class, 'delete']);
Route::get('/admin/edit/{userId}', [AdminController::class, 'edit']);
Route::get('/admin/update/{userId}', [AdminController::class, 'update']);

Auth::routes(['register' => false]);
// Authentication (Login only)
Route::get('home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('home')->middleware('isAdmin');
Route::get('cashier', [App\Http\Controllers\HomeController::class, 'cashier']);
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout']);
