<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
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
    return view('login');
});



Route::post("/login", [UserController::class, 'login'])->name('login');
Route::get("/home", [ProductController::class, 'index']);
Route::get("/detail/{id}", [ProductController::class, 'detail'])->name("product.detail");
Route::get("search", [ProductController::class, 'search'])->name("product.search");
Route::post("add_to_cart", [ProductController::class, 'add_to_cart'])->name("product.add_to_cart");

//logout
Route::get('logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::get('/cartlists',[ProductController::class,'cartList'])->name('product.cartlist');
Route::get('removecarts/{id}',[ProductController::class,'removeCart'])->name('Product.removeCart');
Route::get('/orders',[ProductController::class,'confirmOrders'])->name('product.order');
Route::post('/confirms',[ProductController::class,'orderConfirmation'])->name('product.confirm');
Route::get('/myorders',[ProductController::class,'orderList'])->name('product.myorder');