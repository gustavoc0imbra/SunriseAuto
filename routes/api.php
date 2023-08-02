<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index', [ProductController::class, 'index'])->name('api.index');

Route::post('/storeProd', [ProductController::class, 'saveProduct'])->name('api.storeProd');
