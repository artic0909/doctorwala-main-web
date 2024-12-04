<?php

// use App\Http\Controllers\DwPartnerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/partner-auth.php';
require __DIR__ . '/user-auth.php';




// ===========================================================================================================
// ========================================== Front Routes Start =============================================
// ===========================================================================================================

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/coupons', function () {
    return view('coupon');
});
// ===========================================================================================================
// ========================================== Front Routes End ===============================================
// ===========================================================================================================
