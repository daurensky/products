<?php

use App\Actions\RedirectToHomeAction;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Shop\ProductController as ShopProductController;
use App\Http\Controllers\Stock\ProductCategoryController;
use App\Http\Controllers\Stock\ProductController as StockProductController;
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

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::get('logout', [LoginController::class, 'destroy'])->name('logout');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/', [RedirectToHomeAction::class, 'handle']);

    Route::group([
        'middleware' => 'user_type:operator',
        'prefix'     => 'operator',
    ], function () {
        Route::view('/', 'operator.home')->name('home');
    });

    Route::group([
        'middleware' => 'user_type:shop',
        'prefix'     => 'shop',
        'as'         => 'shop.',
    ], function () {
        Route::view('/', 'shop.home')->name('home');
        Route::get('product', [ShopProductController::class, 'index'])->name('product.index');
    });

    Route::group([
        'middleware' => 'user_type:stock',
        'prefix'     => 'stock',
        'as'         => 'stock.',
    ], function () {
        Route::view('/', 'stock.home')->name('home');

        Route::resource('product-category', ProductCategoryController::class);
        Route::resource('product', StockProductController::class);
    });
});