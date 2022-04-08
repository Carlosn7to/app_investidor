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

Route::get('/', [\App\Http\Controllers\WebController::class, "index"])->name("web.login");
Route::post('/', [\App\Http\Controllers\AuthenticController::class, 'login'])->name('authentic.login');
Route::get('/logout', [\App\Http\Controllers\AuthenticController::class, 'logout'])->name('authentic.logout');

Route::middleware(\App\Http\Middleware\Authentic::class)->prefix('/app')->group(function(){
    Route::get('/', [\App\Http\Controllers\HomeController::class, "index"])->name('app.index');
});
