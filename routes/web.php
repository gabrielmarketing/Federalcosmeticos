<?php

use App\Http\Controllers\SiteController;
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


Route::name('site.')->group(function (){

    Route::get('/', [ SiteController::class, "index" ])
        ->name('index');

    Route::get('/Carrinho', [ SiteController::class, "ShopCart" ])
        ->name('ShopCart');

    Route::get('/Checkout', [ SiteController::class, "Checkout" ])
        ->name('Checkout');

    Route::get('/OrderComplete', [ SiteController::class, "OrderComplete" ])
        ->name('OrderComplete');


});
