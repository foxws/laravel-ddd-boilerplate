<?php

use App\Api\Http\Controllers\HomeController;
use Foxws\LivewireUse\Facades\LivewireUse;
use Illuminate\Support\Facades\Route;

// Auth
LivewireUse::routes();

// App
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', HomeController::class)->name('home');

    // Tags
    // Route::name('tags.')->prefix('tags')->group(function () {
    // Route::get('/', TagIndexController::class)->name('index');
    // });
});
