<?php


// use App\Http\Controllers\DwPartnerController;
use App\Http\Controllers\Front\FrontAboutPageController;
use App\Http\Controllers\Front\FrontBlogsPageController;
use App\Http\Controllers\Front\FrontContactusPageController;
use App\Http\Controllers\Front\FrontHomePageController;
use App\Http\Controllers\Front\FrontPrivacyPolicyPageController;
use App\Http\Controllers\DwUserController;
use App\Http\Controllers\DwUserOTPController;
use App\Http\Controllers\User\ProfileEditController;
use App\Http\Controllers\User\UserAllDoctorHandleController;
use App\Http\Controllers\User\UserAllOPDHandleController;
use App\Http\Controllers\User\UserAllPathologyHandleController;
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


    Route::get('/dw/coupons', function () {
        return view('coupon');
    })->name('dw.coupon');



    Route::get('/dw', [FrontHomePageController::class, 'index'])->name('dw.index');
    Route::get('/dw/about', [FrontAboutPageController::class, 'index'])->name('dw.about');
    Route::get('/dw/blog', [FrontBlogsPageController::class, 'index'])->name('dw.blog');
    Route::get('/dw/contact', [FrontContactusPageController::class, 'index'])->name('dw.contact');
    Route::post('/dw/contact', [FrontContactusPageController::class, 'store'])->name('restricted-contact.store');
    Route::get('/dw/privacy-policy', [FrontPrivacyPolicyPageController::class, 'index'])->name('dw.privacy-policy');
    Route::get('/dw/opd', [UserAllOPDHandleController::class, 'index'])->name('dw.opd');
    Route::get('/dw/doctor', [UserAllDoctorHandleController::class, 'index'])->name('dw.doctor');
    Route::get('/dw/pathology', [UserAllPathologyHandleController::class, 'index'])->name('dw.pathology');


    // single opd ------------------------------------------------->
    Route::get('/dw/opd/{id}', [UserAllOPDHandleController::class, 'singleOPDView'])
        ->name('dw.opd.single')
        ->where('id', '[0-9]+');

    Route::post('/dw/opd/inquiry', [UserAllOPDHandleController::class, 'patientInquiry'])->name('dw.opd.inquiry.store');
    Route::post('/dw/opd/rating', [UserAllOPDHandleController::class, 'saveRating'])->name('dw.opd.rating.save');


    // single pathology ------------------------------------------------->
    Route::get('/dw/pathology/{id}', [UserAllPathologyHandleController::class, 'singlePathView'])
        ->name('dw.pathology.single')
        ->where('id', '[0-9]+');

    Route::post('/dw/pathology/inquiry', [UserAllPathologyHandleController::class, 'patientInquiry'])->name('dw.pathology.inquiry.store');
    Route::post('/dw/pathology/rating', [UserAllPathologyHandleController::class, 'saveRating'])->name('dw.pathology.rating.save');



    // single doctor ------------------------------------------------->
    Route::get('/dw/doctor/{id}', [UserAllDoctorHandleController::class, 'singleDocView'])
        ->name('dw.doctor.single')
        ->where('id', '[0-9]+');

    Route::post('/dw/doctor/inquiry', [UserAllDoctorHandleController::class, 'patientInquiry'])->name('dw.doctor.inquiry.store');
    Route::post('/dw/doctor/rating', [UserAllDoctorHandleController::class, 'saveRating'])->name('dw.doctor.rating.save');






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
