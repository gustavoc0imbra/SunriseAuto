<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
/*use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;*/

Route::get('/', [ApiController::class,'index'])->name('site.home');

/*Route::get('/login', [UserController::class,'loginForm'])->name('site.login');

Route::get('/signUp',[UserController::class,'registerForm'])->name('site.register');
Route::post('/signUp',[UserController::class,'registerCriar'])->name('site.addCliente');

Route::get('/cart', [UserController::class, 'cart'])->name('site.cart');
Route::get('/addProduct', [ProductController::class, 'create'])->name('site.addProd');

Route::get('/productList', [ProductController::class, 'list'])->name('site.lista');*/
