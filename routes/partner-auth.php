<?php


use App\Http\Controllers\DwPartnerController;
use App\Http\Controllers\DwPartnerOTPController;
use App\Http\Controllers\Partnerpanel\ProfileEditController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:partner')->group(function () {

    Route::get('/partner-register', [DwPartnerController::class, 'viewPartnerRegForm']);
    Route::get('/partner-login', [DwPartnerController::class, 'partnerLoginFormView']);

    Route::post('/partner-register', [DwPartnerController::class, 'partnerRegForm'])->name('partnerRegForm');
    Route::post('/partner-login', [DwPartnerController::class, 'partnerLogin'])->name('partnerpanel.partner-login');



    // Route for showing the email input form (partner-otp)
    Route::get('/partner-otp', [DwPartnerOTPController::class, 'partnerLoginWithOTPView'])->name('partner-otp.view');

    // Route for showing the OTP verification form
    Route::get('/partner-otp-verify', [DwPartnerOTPController::class, 'partnerLoginWithOTPVerifyView'])->name('partner-otp.verify');

    // Route to send OTP to the email
    Route::post('/partner-send-otp', [DwPartnerOTPController::class, 'sendOTP'])->name('partner.send.otp');

    // Route to verify the OTP
    Route::post('/partner-verify-otp', [DwPartnerOTPController::class, 'verifyOTP'])->name('partner.verify.otp');
});


Route::middleware(['auth:partner', 'verified'])->group(function () {




    // ===========================================================================================================
    // ========================================== Parter Restricted Routes End ===================================
    // ===========================================================================================================

    Route::get('/partnerpanel/partner-dashboard', function () {
        return view('partnerpanel.partner-dashboard');
    })->name('partnerpanel.partner-dashboard');

    Route::get('/partnerpanel/partner-profile', function () {
        return view('partnerpanel.partner-profile');
    })->name('partnerpanel.partner-profile');

    Route::get('/partnerpanel/partner-opd-contact', function () {
        return view('partnerpanel.partner-opd-contact');
    })->name('partnerpanel.partner-opd-contact');

    Route::get('/partnerpanel/partner-pathology-contact', function () {
        return view('partnerpanel.partner-pathology-contact');
    })->name('partnerpanel.partner-pathology-contact');

    Route::get('/partnerpanel/partner-about-clinic', function () {
        return view('partnerpanel.partner-about-clinic');
    })->name('partnerpanel.partner-about-clinic');

    Route::get('/partnerpanel/partner-service-lists', function () {
        return view('partnerpanel.partner-service-lists');
    })->name('partnerpanel.partner-service-lists');

    Route::get('/partnerpanel/partner-gallery', function () {
        return view('partnerpanel.partner-gallery');
    })->name('partnerpanel.partner-gallery');

    Route::get('/partnerpanel/partner-opd', function () {
        return view('partnerpanel.partner-opd');
    })->name('partnerpanel.partner-opd');

    Route::get('/partnerpanel/partner-opd-show', function () {
        return view('partnerpanel.partner-opd-show');
    })->name('partnerpanel.partner-opd-show');

    Route::get('/partnerpanel/partner-pathology', function () {
        return view('partnerpanel.partner-pathology');
    })->name('partnerpanel.partner-pathology');

    Route::get('/partnerpanel/partner-pathology-show', function () {
        return view('partnerpanel.partner-pathology-show');
    })->name('partnerpanel.partner-pathology-show');

    Route::get('/partnerpanel/partner-doctors', function () {
        return view('partnerpanel.partner-doctors');
    })->name('partnerpanel.partner-doctors');

    Route::get('/partnerpanel/partner-doctors-show', function () {
        return view('partnerpanel.partner-doctors-show');
    })->name('partnerpanel.partner-doctors-show');

    Route::get('/partnerpanel/partner-inquiry-from-patients', function () {
        return view('partnerpanel.partner-inquiry-from-patients');
    })->name('partnerpanel.partner-inquiry-from-patients');

    Route::get('/partnerpanel/partner-get-subscription', function () {
        return view('partnerpanel.partner-get-subscription');
    })->name('partnerpanel.partner-get-subscription');

    Route::get('/partnerpanel/partner-show-invoice', function () {
        return view('partnerpanel.partner-show-invoice');
    })->name('partnerpanel.partner-show-invoice');

    Route::get('/partnerpanel/partner-get-ticket', function () {
        return view('partnerpanel.partner-get-ticket');
    })->name('partnerpanel.partner-get-ticket');

    Route::get('/partnerpanel/partner-show-ticket', function () {
        return view('partnerpanel.partner-show-ticket');
    })->name('partnerpanel.partner-show-ticket');

    Route::get('/partnerpanel/partner-feedbacks', function () {
        return view('partnerpanel.partner-feedbacks');
    })->name('partnerpanel.partner-feedbacks');

    // ===========================================================================================================
    // ========================================== Partner Restricted Routes End ==================================
    // ===========================================================================================================







    // Route to show the profile edit page
    Route::get('/partnerpanel/partner-profile', [ProfileEditController::class, 'partnerProfileEditWithCurrentPartnerDetails']);

    // Route to update the profile details
    Route::post('/partnerpanel/partner-profile-update', [ProfileEditController::class, 'updateProfile'])->name('partner.profile.update');

    // Route to update the password
    Route::post('/partnerpanel/partner-password-update', [ProfileEditController::class, 'updatePassword'])->name('partner.password.update');




















    Route::post('/partner-logout', [DwPartnerController::class, 'partnerlogout'])->name('partner.logout');
});
