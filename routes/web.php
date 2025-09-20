<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
    ]);
});

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Регистрация
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Вход
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Выход
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/books',[BookController::class,'catalog'])->middleware(['auth', 'verified'])->name('catalog');
Route::get('/books/{id}',[BookController::class,'detail'])->middleware(['auth', 'verified']);
Route::post('/cart/add/{id}',[CartController::class,'add'])->middleware(['auth', 'verified']);
Route::get('/cart/add/{id}',[CartController::class,'add'])->middleware(['auth', 'verified']);
Route::post('/cart/delete/{id}',[CartController::class,'delete'])->middleware(['auth', 'verified']);
Route::get('/cart',[CartController::class,'show'])->middleware(['auth', 'verified']);
Route::post('/order/selected', [OrderController::class, 'selected'])->name('order.selected')->middleware(['auth', 'verified']);
Route::get('/order/success', [OrderController::class, 'success'])->name('order.success')->middleware(['auth', 'verified']);
Route::post('/order/{id}', [OrderController::class, 'show'])->name('order.show')->middleware(['auth', 'verified']);
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show')->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
