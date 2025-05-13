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

// Error page if any page not found
Route::fallback(function () {
    return response()->view('error', [], 404);
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/partner-auth.php';
require __DIR__ . '/user-auth.php';
require __DIR__ . '/api.php';




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

Route::get('/opd/search-specialist', [FrontHomePageController::class, 'opdContactFetchBySearchDoctorSpaciality'])
    ->name('opd.search.doctor.specialist');

Route::get('/global-search', [FrontHomePageController::class, 'globalSearch'])->name('global.search');
