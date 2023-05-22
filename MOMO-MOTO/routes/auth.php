<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;


Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);
Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('auth');

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('layouts.home');
    })->name('home');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
