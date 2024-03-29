<?php

use App\Api\Http\Controllers\AssetController;
use App\Api\Http\Controllers\HomeController;
use App\Api\Http\Controllers\ResponsiveController;
use App\Api\Http\Controllers\SubscriptionController;
use App\Api\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::name('api.')->prefix('v1')->group(function () {
    // Home
    Route::get('/', HomeController::class)->name('home');

    // Resources
    Route::apiResources([
        'users' => UserController::class,
    ]);

    // Account
    Route::name('account.')->prefix('account')->group(function () {
        Route::get('/subscription', SubscriptionController::class)->name('subscription');
    });

    // Media
    Route::name('media.')->prefix('media')->group(function () {
        Route::get('/asset/{media}/{conversion?}', AssetController::class)->name('asset');
        Route::get('/responsive/{media}/{conversion?}', ResponsiveController::class)->name('responsive');
    });
});
