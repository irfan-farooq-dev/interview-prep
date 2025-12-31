<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PublicController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProfileController;

// Public routes
Route::prefix('public')->group(function () {
    Route::get('/info', [PublicController::class, 'info']);
    Route::get('/news', [PublicController::class, 'news']);
});

// Authenticated routes
Route::middleware('auth.jwt')->prefix('user')->group(function () {
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/stats', [UserController::class, 'stats']);
});

Route::get('/clear', [ProfileController::class, 'clear']);
