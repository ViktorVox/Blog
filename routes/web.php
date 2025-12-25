<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);
Route::get('/about', [BlogController::class, 'about']);
Route::get('/post/{id}', [BlogController::class, 'show']);
Route::get('/create', [BlogController::class, 'create']);
Route::get('/posts', [BlogController::class, 'allPosts']);
Route::post('/post', [BlogController::class, 'store']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
