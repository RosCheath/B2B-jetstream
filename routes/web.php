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

Route::get('/admin/dashboard', function () {
    return view('Dashboard.dashboard');
});

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
