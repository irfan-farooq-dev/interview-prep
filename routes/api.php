<?php

use Illuminate\Support\Facades\Route;

// Public routes
Route::prefix('public')->group(function () {
    Route::get('/info', function () {
        return response()->json([
            'service' => 'profile-service',
            'version' => '1.0.0',
            'message' => 'Welcome to Profile Service (public endpoint)',
        ]);
    });

    Route::get('/news', function () {
        return response()->json([
            ['title' => 'Microservices concept demo', 'date' => now()],
            ['title' => 'Profile service running smoothly', 'date' => now()],
        ]);
    });
});

// Authenticated routes
Route::middleware('auth.jwt')->prefix('user')->group(function () {
    Route::get('/profile', function () {
        return response()->json([
            'id'    => 1,
            'name'  => 'Demo User',
            'email' => 'demo@example.com',
        ]);
    });

    Route::get('/stats', function () {
        return response()->json([
            'projects'      => 5,
            'tasks'         => 12,
            'notifications' => 3,
        ]);
    });
});

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    // Artisan::call('view:clear');

    return "Cleared!";
});