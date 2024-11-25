<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    
    Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])
                ->name('forgot-password');

    Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink'])
                ->name('password.email');

    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])
                ->name('password.reset');

    Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])
                ->name('password.update');

});

Route::middleware('auth')->group(function () {

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
