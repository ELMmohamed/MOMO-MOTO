<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FunctionsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Adminstration;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);
Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('auth');

Route::middleware('auth')->group(function () {
    Route::get('/home', function () { return view('layouts.home');})->name('home');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/getuser', [FunctionsController::class, 'getUSer'])->name('getuser');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile'); 
    Route::post('/updateuser', [ProfileController::class, 'update'])->name('updateuser');
    Route::post('/deleteuser', [ProfileController::class, 'delete'])->name('deleteuser');
    Route::get('/addproduct', [ProductsController::class, 'get_addproduct'])->name('get_addproduct')->middleware(Adminstration::class);
    Route::post('/addproduct', [ProductsController::class, 'store'])->name('addproduct');
    Route::get('/getproducts', [ProductsController::class, 'get_products'])->name('getproducts');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/getcart', [CartController::class, 'get_cart'])->name('getcart');
    Route::post('/addcart', [CartController::class, 'add_cart'])->name('addcart');
});

