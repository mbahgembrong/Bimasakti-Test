<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PascabayarController,
    PrabayarController
};

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
    return route('prabayar.index');
});

Route::prefix('pascabayars')->group(function () {
    Route::get('/', [PascabayarController::class,'index'])->name('pascabayars.index');
    Route::post('/get-tagihan', [PascabayarController::class,'getTagihan'])->name('pascabayars.getTagihan');
    Route::post('/pay-tagihan', [PascabayarController::class, 'payTagihan'])->name('pascabayars.payTagihan');
});

Route::prefix('prabayars')->group(function () {
    Route::get('/', [PrabayarController::class, 'index'])->name('prabayars.index');
    Route::post('/get-tagihan', [PrabayarController::class, 'getTagihan'])->name('prabayars.getTagihan');
    Route::post('/pay-tagihan', [PrabayarController::class, 'payTagihan'])->name('prabayars.payTagihan');
});
