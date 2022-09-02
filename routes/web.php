<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

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


Route::get('/', [ShopController::class, 'index'])->name('index');

Route::get('/about', [ShopController::class, 'about'])->name('about');

Route::get('/contact', [ShopController::class, 'contact'])->name('contact');

Route::get('/products', [ShopController::class, 'products'])->name('products');

Route::get('/product/create',[ProductController::class, 'create'])->name('create');

Route::post('/product/create', [ProductController::class, 'store'])->name('store');

Route::get('/product/{id}', [ShopController::class, 'show'])->name('product');

Route::get('/cart', [ShopController::class, 'cart'])->name('cart');
