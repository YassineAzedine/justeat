<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BasketController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;


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
    return view('home');
});

Auth::routes();
Route::post('restaurants', [App\Http\Controllers\RestaurantController::class, 'index'])->name('search.restaurants');
Route::get('restaurant/{slug}', [App\Http\Controllers\ProductController::class, 'index'])->name('restaurant.products');



Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>['web']],function(){
  
Route::get('/basket',[BasketController::class, 'index'])->name('basket.index');
Route::post('/basket',[BasketController::class, 'store'])->name('basket.store');
//checkout
Route::get('/checkout',[CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/user/setup-intent',[UserController::class, 'getSetupIntent'])->name('checkout.index');
Route::post('/checkout',[CheckoutController::class, 'store'])->name('checkout.store');






});
