<?php

// use App\Http\Controllers\DwPartnerController;

use App\Http\Controllers\DwPartnerController;
use App\Http\Controllers\Front\FrontAboutPageController;
use App\Http\Controllers\Front\FrontBlogsPageController;
use App\Http\Controllers\Front\FrontContactusPageController;
use App\Http\Controllers\Front\FrontHomePageController;
use App\Http\Controllers\Front\FrontPrivacyPolicyPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/welcome', function () {
//     return view('welcome');
// });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/partner-auth.php';
require __DIR__ . '/user-auth.php';




// ===========================================================================================================
// ========================================== Front Unrestricted Routes Start ================================
// ===========================================================================================================

Route::get('/coupons', function () {
    return view('coupon');
});


Route::get('/', [FrontHomePageController::class, 'index'])->name('homepage');
Route::get('/about', [FrontAboutPageController::class, 'index'])->name('aboutpage');
Route::get('/blog', [FrontBlogsPageController::class, 'index'])->name('blogpage');
Route::get('/contact', [FrontContactusPageController::class, 'index'])->name('contactpage');
Route::post('/contact', [FrontContactusPageController::class, 'store'])->name('contact.store');
Route::get('/privacy-policy', [FrontPrivacyPolicyPageController::class, 'index'])->name('privacy-policiypage');
// ===========================================================================================================
// ========================================== Front Unrestricted Routes End ==================================
// ===========================================================================================================



