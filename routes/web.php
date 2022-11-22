<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ProductController::class,'index'])->name('site.home');

Route::get('/login', [UserController::class,'loginForm'])->name('site.login');

Route::get('/cadastro',[UserController::class,'registerForm'])->name('site.register');
Route::post('/cadastro',[UserController::class,'registerCriar'])->name('site.addCliente');

Route::get('/carrinho', [UserController::class, 'cart'])->name('site.cart');
Route::get('/addProduto', [ProductController::class, 'create'])->name('site.addProd');

Route::get('/listaProdutos', [ProductController::class, 'list'])->name('site.lista');
