<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductFavoritesController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('products', ProductController::class);

Route::post('/products/{serialNumber}/favorites', [ProductFavoritesController::class, 'store'])->name('product-favorites.store');
Route::delete('/products/{serialNumber}/favorites', [ProductFavoritesController::class, 'destroy'])->name('product-favorites.destroy');

Auth::routes();
