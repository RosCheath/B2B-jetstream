<?php

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

Route::get('/admin/dashboard',[\App\Http\Controllers\Admin\DashboardController::class,'AdminDashboard'])->name('admin.dashboard')->middleware('auth');
Route::get('/admin/Products/List',[\App\Http\Controllers\Admin\ProductController::class,'product'])->name('admin.product')->middleware('auth');
Route::resource('product',\App\Http\Controllers\User\ProductController::class)->middleware('auth');
Route::resource('order',\App\Http\Controllers\User\OrderController::class)->middleware('auth');
Route::resource('add_to_cart',\App\Http\Controllers\User\AddToCartController::class)->middleware('auth');
Route::resource('favorite',\App\Http\Controllers\User\FavoriteController::class)->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::group(['middleware' => 'can:user_auth'],function (){
        Route::get('/dashboard',[\App\Http\Controllers\UserDashboardController::class,'dashboard'])->name('dashboard');
    });

});

Route::get('/',[\App\Http\Controllers\FrontController::class,'home'])->name('home');
Route::get('/shop',[\App\Http\Controllers\FrontController::class,'shop'])->name('shop');
