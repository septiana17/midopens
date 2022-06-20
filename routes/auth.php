<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

// custom route
Route::group(['prefix' => '/admin'], function ()
{
    Route::get('/login', [AdminController::class, 'view']);
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
});

# Tampilan Login User
Route::get('/login', [AuthController::class, 'viewLogin'])->name('user.login');
Route::post('/login', [LoginController::class, 'login'])->name('user.login.post');

Route::get('/register', [AuthController::class, 'viewRegister'])->name('user.register');
Route::post('/register', [RegisterController::class, 'register'])->name('user.register.post');

# Tampilan Login Guest
Route::get('/register-pengunjung', [AuthController::class, 'register_pengunjung'])->name('guest.register');
Route::post('/register-pengunjung', [LoginController::class, 'store_pengunjung'])->name('guest.register.post');