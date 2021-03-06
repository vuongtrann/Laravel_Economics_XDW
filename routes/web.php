<?php

use App\Http\Controllers\CartsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [ProductsController::class, 'index']);

Auth::routes();

Route::post('/cart', [CartsController::class, 'store'])->name('cart');

Route::get('/checkout', [CartsController::class, 'index'])->name('checkout');

Route::get('/checkout/get/items', [CartsController::class, 'getCartItemsForCheckout']);

Route::post('/process/user/payment', [CartsController::class, 'processPayment']);

Route::get('/allProduct', [ProductsController::class,'showAllProduct'])->name('allProduct');

Route::get('singleProduct/{id}', [ProductsController::class,'showSingleProduct'])->name('singleProduct');

Route::get('/search', [ProductsController::class,'getSearch'])->name('search');
//Route::get('search',['as'=>'search','uses'=>'ProductsController@getSearch']);