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

Route::get('/', function () {
    return view('welcome');
});

// １章
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])
    ->middleware('guest');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])
    ->middleware('guest');
    Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])
    ->middleware('guest');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// ２章
Route::get('/service-container',  [App\Http\Controllers\ServiceContainerController::class, 'index']);

// 3章
Route::get('/purchase/{id}',  [App\Http\Controllers\PurchaseController::class, 'index']);
Route::post('/purchase',  [App\Http\Controllers\PurchaseController::class, 'store']);

// 4章
Route::get('/request',  [App\Http\Controllers\RequestController::class, 'index'])->name('request.index');
Route::post('/request',  [App\Http\Controllers\RequestController::class, 'store'])->name('request.store');
Route::get('/payload',  App\Http\Controllers\PayloadAction::class);
    
// 5章
Route::get('/db',  App\Http\Controllers\DBController::class);
