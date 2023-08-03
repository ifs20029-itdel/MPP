<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AgencyController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AgencyServiceController;
use App\Http\Controllers\Admin\CriticSuggestionController;

Route::name('backend.')->middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Agency
    Route::resource('agency', AgencyController::class);

    // Agency Service
    Route::resource('agency-service', AgencyServiceController::class);

    // News
    Route::resource('news', NewsController::class);

    // Booking
    Route::prefix('booking')->name('booking.')->group(function () {
        Route::get('/{slug}', [BookingController::class, 'index'])->name('index');
        Route::get('detail/{id}', [BookingController::class, 'detail'])->name('detail');
        Route::get('process/{id}', [BookingController::class, 'process'])->name('process');
        Route::get('finish/{id}', [BookingController::class, 'finish'])->name('finish');
    });

    // Critic Suggestion
    Route::get('critic-suggestion', [CriticSuggestionController::class, 'index'])->name('critic-suggestion.index');

    // Role
    Route::resource('role', RoleController::class);

    // User
    Route::resource('user', UserController::class);
});
