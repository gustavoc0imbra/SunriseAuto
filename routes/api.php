<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth', function (){
Route::get('/profile')->name('api.profile');
Route::get('/cart')->name('api.cart');

Route::get('checkCep', [ApiController::class, 'verifyCEP'])->name('api.checkCep');
// });

Route::get('/index', [ApiController::class, 'index'])->name('api.index');

Route::post('/create', [ApiController::class, 'createProductApi'])->name('api.createProd');
