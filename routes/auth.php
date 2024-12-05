<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:web')->group(function () {
    Route::get('/superadmin/register', [RegisteredUserController::class, 'create']);

    Route::post('/superadmin/register', [RegisteredUserController::class, 'store'])->name('superadmin.register');

    Route::get('/superadmin/login', [AuthenticatedSessionController::class, 'create']);

    Route::post('/superadmin/login', [AuthenticatedSessionController::class, 'store'])->name('superadmin.login');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth:web')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');











    // ===========================================================================================================
    // ========================================== Super Admin Restricted Routes Start ============================
    // ===========================================================================================================
    Route::get('/superadmin/super-dashboard', function () {
        return view('superadmin.super-dashboard');
    })->middleware(['auth', 'verified'])->name('superadmin.super-dashboard');


    Route::get('/superadmin/super-home-banner', function () {
        return view('superadmin.super-home-banner');
    })->middleware(['auth', 'verified'])->name('superadmin.super-home-banner');


    Route::get('/superadmin/super-others-banner', function () {
        return view('superadmin.super-others-banner');
    })->middleware(['auth', 'verified'])->name('superadmin.super-others-banner');


    Route::get('/superadmin/super-all-user', function () {
        return view('superadmin.super-all-user');
    })->middleware(['auth', 'verified'])->name('superadmin.super-all-user');


    Route::get('/superadmin/super-add-partners', function () {
        return view('superadmin.super-add-partners');
    })->middleware(['auth', 'verified'])->name('superadmin.super-add-partners');


    Route::get('/superadmin/super-all-partner', function () {
        return view('superadmin.super-all-partner');
    })->middleware(['auth', 'verified'])->name('superadmin.super-all-partner');


    Route::get('/superadmin/super-all-opd', function () {
        return view('superadmin.super-all-opd');
    })->middleware(['auth', 'verified'])->name('superadmin.super-all-opd');


    Route::get('/superadmin/super-edit-opd-details', function () {
        return view('superadmin.super-edit-opd-details');
    })->middleware(['auth', 'verified'])->name('superadmin.super-edit-opd-details');


    Route::get('/superadmin/super-all-pathology', function () {
        return view('superadmin.super-all-pathology');
    })->middleware(['auth', 'verified'])->name('superadmin.super-all-pathology');


    Route::get('/superadmin/super-edit-pathology-details', function () {
        return view('superadmin.super-edit-pathology-details');
    })->middleware(['auth', 'verified'])->name('superadmin.super-edit-pathology-details');


    Route::get('/superadmin/super-all-doctors', function () {
        return view('superadmin.super-all-doctors');
    })->middleware(['auth', 'verified'])->name('superadmin.super-all-doctors');


    Route::get('/superadmin/super-edit-doctors-details', function () {
        return view('superadmin.super-edit-doctors-details');
    })->middleware(['auth', 'verified'])->name('superadmin.super-edit-doctors-details');


    Route::get('/superadmin/super-aboutus', function () {
        return view('superadmin.super-aboutus');
    })->middleware(['auth', 'verified'])->name('superadmin.super-aboutus');


    Route::get('/superadmin/super-blogs', function () {
        return view('superadmin.super-blogs');
    })->middleware(['auth', 'verified'])->name('superadmin.super-blogs');


    Route::get('/superadmin/super-user-inquiry', function () {
        return view('superadmin.super-user-inquiry');
    })->middleware(['auth', 'verified'])->name('superadmin.super-user-inquiry');


    Route::get('/superadmin/super-add-coupons', function () {
        return view('superadmin.super-add-coupons');
    })->middleware(['auth', 'verified'])->name('superadmin.super-add-coupons');


    Route::get('/superadmin/super-show-coupons', function () {
        return view('superadmin.super-show-coupons');
    })->middleware(['auth', 'verified'])->name('superadmin.super-show-coupons');


    Route::get('/superadmin/super-add-subscriptions', function () {
        return view('superadmin.super-add-subscriptions');
    })->middleware(['auth', 'verified'])->name('superadmin.super-add-subscriptions');


    Route::get('/superadmin/super-show-subscription', function () {
        return view('superadmin.super-show-subscription');
    })->middleware(['auth', 'verified'])->name('superadmin.super-show-subscription');


    Route::get('/superadmin/super-opd-inquiry', function () {
        return view('superadmin.super-opd-inquiry');
    })->middleware(['auth', 'verified'])->name('superadmin.super-opd-inquiry');


    Route::get('/superadmin/super-path-inquiry', function () {
        return view('superadmin.super-path-inquiry');
    })->middleware(['auth', 'verified'])->name('superadmin.super-path-inquiry');


    Route::get('/superadmin/super-doc-inquiry', function () {
        return view('superadmin.super-doc-inquiry');
    })->middleware(['auth', 'verified'])->name('superadmin.super-doc-inquiry');


    Route::get('/superadmin/super-all-tickets', function () {
        return view('superadmin.super-all-tickets');
    })->middleware(['auth', 'verified'])->name('superadmin.super-all-tickets');


    Route::get('/superadmin/super-ticket-replies', function () {
        return view('superadmin.super-ticket-replies');
    })->middleware(['auth', 'verified'])->name('superadmin.super-ticket-replies');
    // ===========================================================================================================
    // ========================================== Super Admin Restricted Routes End ==============================
    // ===========================================================================================================




















    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
