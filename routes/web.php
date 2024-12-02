<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';






// ===========================================================================================================
// ========================================== Super Admin Routes Start =======================================
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
// ========================================== Super Admin Routes End =========================================
// ===========================================================================================================















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


Route::get('/user-login', function () {
    return view('authentication');
});

// ===========================================================================================================
// ========================================== Front Routes End ===============================================
// ===========================================================================================================
