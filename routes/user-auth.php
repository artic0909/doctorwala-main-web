<?php


// use App\Http\Controllers\DwPartnerController;
use App\Http\Controllers\DwUserController;
use App\Http\Controllers\DwUserOTPController;
use App\Http\Controllers\User\ProfileEditController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:dwuser')->group(function () {
    Route::get('/dw/user-auth', [DwUserController::class, 'viewUserLogForm'])->name('dw.user-auth');
    Route::post('/dw/user-register', [DwUserController::class, 'userRegForm'])->name('dw.user-register');
    Route::post('/dw/user-auth', [DwUserController::class, 'userLogin'])->name('dw.user-login');




    // Route for showing the email input form (user-otp)
    Route::get('/user-otp', [DwUserOTPController::class, 'userLoginWithOTPView'])->name('user-otp.view');

    // Route for showing the OTP verification form
    Route::get('/user-otp-verify', [DwUserOTPController::class, 'userLoginWithOTPVerifyView'])->name('user-otp.verify');

    // Route to send OTP to the email
    Route::post('/user-send-otp', [DwUserOTPController::class, 'sendOTP'])->name('user.send.otp');

    // Route to verify the OTP
    Route::post('/user-verify-otp', [DwUserOTPController::class, 'verifyOTP'])->name('user.verify.otp');
});


Route::middleware(['auth:dwuser', 'verified'])->group(function () {




    // ===========================================================================================================
    // ========================================== User Restricted Routes Start ===================================
    // ===========================================================================================================
    Route::get('/dw', function () {
        return view('index');
    })->name('dw.index');

    Route::get('/dw/about', function () {
        return view('about');
    })->name('dw.about');


    Route::get('/dw/opd', function () {
        return view('opd');
    })->name('dw.opd');

    Route::get('/dw/doctor', function () {
        return view('doctor');
    })->name('dw.doctor');


    Route::get('/dw/pathology', function () {
        return view('pathology');
    })->name('dw.pathology');




    Route::get('/dw/coupons', function () {
        return view('coupon');
    })->name('dw.coupon');

    Route::get('/dw/blog', function () {
        return view('blog');
    })->name('dw.blog');

    Route::get('/dw/contact', function () {
        return view('contact');
    })->name('dw.contact');

    Route::get('/dw/privacy-policy', function () {
        return view('privacy-policy');
    })->name('dw.privacy-policy');


    // ===========================================================================================================
    // ========================================== User Restricted Routes End =====================================
    // ===========================================================================================================


    // Route to show the profile edit page
    Route::get('/dw', [ProfileEditController::class, 'userProfileEditWithCurrentUserDetails']);

    // Route to update the profile details
    Route::post('/dw/user-profile-update', [ProfileEditController::class, 'updateProfile'])->name('user.profile.update');

    // Route to update the password
    Route::post('/dw/user-password-update', [ProfileEditController::class, 'updatePassword'])->name('user.password.update');




    Route::post('/user-logout', [DwUserController::class, 'userlogout'])->name('user.logout');
});
