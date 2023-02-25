<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index', [ProductController::class, 'indexApi'])->name('api.index');

Route::post('/create', [ProductController::class, 'createProductApi'])->name('api.createProd');
