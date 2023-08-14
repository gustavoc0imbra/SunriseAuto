<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index', [ProductController::class, 'index'])->name('api.index');

Route::post('/storeProd', [ProductController::class, 'saveProduct'])->name('api.storeProd');

Route::put('/editProd', [ProductController::class, 'edit'])->name('api.edit');

Route::get('/detailsProd/{id?}', [ProductController::class, 'details'])->name('api.prod_detail');

/*---------------- Authentication sss ------------------*/
Route::post('/register', [LoginController::class, 'register'])->name('api.registerUser');
Route::post('/login', [LoginController::class, 'login'])->name('api.loginUser');
