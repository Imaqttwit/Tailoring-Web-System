<?php

use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('Contact');
Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('Order');

Route::get('/YourOrders', [App\Http\Controllers\YourOrdersController::class, 'index'])->name('YourOrders');

Route::get('/orderforms', [App\Http\Controllers\OrderformsController::class, 'index'])->name('orderforms');
Route::post('/orderforms', [App\Http\Controllers\OrderformsController::class, 'store'])->name('orderforms.store');
Route::get('/shop/add', [ProductController::class, 'create'])->name('add');
Route::post('/shop/store', [ProductController::class, 'store'])->name('store');
Route::get('/shop/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('/shop/update/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/shop/delete/{id}', [ProductController::class, 'destroy'])->name('delete');

