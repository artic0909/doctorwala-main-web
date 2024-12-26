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
use App\Http\Controllers\Superadmin\SuperAboutusController;
use App\Http\Controllers\Superadmin\SuperAllFeedbacksController;
use App\Http\Controllers\Superadmin\SuperAllOnlyDoctorHandleController;
use App\Http\Controllers\Superadmin\SuperAllOPDHandleController;
use App\Http\Controllers\Superadmin\SuperAllPathologyHandleController;
use App\Http\Controllers\Superadmin\SuperAllPatientInquiryController;
use App\Http\Controllers\Superadmin\SuperAllUserController;
use App\Http\Controllers\Superadmin\SuperBlogController;
use App\Http\Controllers\Superadmin\SuperCouponController;
use App\Http\Controllers\Superadmin\SuperHomeBannerController;
use App\Http\Controllers\Superadmin\SuperOtherBannerController;
use App\Http\Controllers\Superadmin\SuperPartnerHandleController;
use App\Http\Controllers\Superadmin\SuperSubscriptionController;
use App\Http\Controllers\Superadmin\SuperTicketController;
use App\Http\Controllers\Superadmin\SuperUserInquiryController;
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





    // All API Routes Start

    // Home Banner---------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/super-home-banner', [SuperHomeBannerController::class, 'index']);
    Route::post('/superadmin/super-home-banner', [SuperHomeBannerController::class, 'store'])->name('superadmin.homebanner.store');
    Route::put('/superadmin/super-home-banner/update/{id}', [SuperHomeBannerController::class, 'update'])->name('superadmin.homebanner.update');
    Route::delete('/superadmin/super-home-banner/delete/{id}', [SuperHomeBannerController::class, 'delete'])->name('superadmin.homebanner.delete');

    // Other Banner---------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/super-others-banner', [SuperOtherBannerController::class, 'index']);
    Route::post('/superadmin/super-others-banner', [SuperOtherBannerController::class, 'store'])->name('superadmin.otherbanner.store');
    Route::put('/superadmin/super-others-banner/update/{id}', [SuperOtherBannerController::class, 'update'])->name('superadmin.otherbanner.update');
    Route::delete('/superadmin/super-others-banner/delete/{id}', [SuperOtherBannerController::class, 'delete'])->name('superadmin.otherbanner.delete');

    // All Users---------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/super-all-user', [SuperAllUserController::class, 'index'])->name('superadmin.super-all-user');
    Route::delete('/superadmin/super-all-user/delete/{id}', [SuperAllUserController::class, 'delete'])->name('superadmin.super-all-user.delete');

    // All Partners---------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/super-add-partners', [SuperPartnerHandleController::class, 'addPartnerView']);
    Route::post('/superadmin/super-add-partners', [SuperPartnerHandleController::class, 'addPartners'])->name('superadmin.register.partners');
    Route::put('/superadmin/super-all-partner/update/{id}', [SuperPartnerHandleController::class, 'editPartnerDetails'])->name('superadmin.update.partner');
    Route::get('/superadmin/super-all-partner', [SuperPartnerHandleController::class, 'allPartnersShow'])->name('superadmin.super-all-partner.get');
    Route::put('/superadmin/super-all-partner/status/{id}', [SuperPartnerHandleController::class, 'statusEdit'])->name('superadmin.status.edit');
    Route::delete('/superadmin/super-all-partner/delete/{id}', [SuperPartnerHandleController::class, 'deletePartner'])->name('superadmin.status.delete');


    // All OPD---------------------------------------------------------------------------------------------------------------------------------------->

    // All OPD View
    Route::get('/superadmin/super-all-opd', [SuperAllOPDHandleController::class, 'opdView'])->name('superadmin.super-all-opd');
    Route::put('/superadmin/super-all-opd/status/{id}', [SuperAllOPDHandleController::class, 'statusEdit'])->name('superadmin.status.opd.edit');
    Route::delete('/superadmin/super-all-opd/delete/{id}', [SuperAllOPDHandleController::class, 'deleteOPDContactDetails'])->name('superadmin.opd.contact.delete');

    // OPD Contact Details
    Route::get('/superadmin/super-edit-opd-details/{id}', [SuperAllOPDHandleController::class, 'opdEditPageView']);
    Route::put('/superadmin/super-edit-opd-details/update/{id}', [SuperAllOPDHandleController::class, 'updateOPDContactDetails'])->name('superadmin.super-update-opd-details');

    // OPD Doctors
    Route::get('/superadmin/super-addopd-doctor/{pid}', [SuperAllOPDHandleController::class, 'addOPDDoctorPageView']);
    Route::post('/superadmin/super-addopd-doctor/add/', [SuperAllOPDHandleController::class, 'addOPDDoctor'])->name('superadmin.super-addopd.doctor');
    Route::post('/superadmin/super-addopd-banner/add/', [SuperAllOPDHandleController::class, 'addOPDBanner'])->name('superadmin.super-addopd.banner');
    Route::delete('/superadmin/super-addopd-banner/delete/{id}', [SuperAllOPDHandleController::class, 'deleteOPDDoctor'])->name('superadmin.super-deleteopd.doctor');
    Route::put('/superadmin/super-addopd-banner/status/{id}', [SuperAllOPDHandleController::class, 'statusOPDDoctorEdit'])->name('superadmin.status.opdDoctor.edit');






    // All Pathology---------------------------------------------------------------------------------------------------------------------------------------->

    // All Pathology View
    Route::get('/superadmin/super-all-pathology', [SuperAllPathologyHandleController::class, 'pathView'])->name('superadmin.super-all-path');
    Route::put('/superadmin/super-all-pathology/status/{id}', [SuperAllPathologyHandleController::class, 'statusEdit'])->name('superadmin.status.path.edit');
    Route::delete('/superadmin/super-all-pathology/delete/{id}', [SuperAllPathologyHandleController::class, 'deletePathContactDetails'])->name('superadmin.path.contact.delete');

    // Pathology Contact Details
    Route::get('/superadmin/super-edit-pathology-details/{id}', [SuperAllPathologyHandleController::class, 'pathEditPageView']);
    Route::put('/superadmin/super-edit-pathology-details/update/{id}', [SuperAllPathologyHandleController::class, 'updatePathContactDetails'])->name('superadmin.super-update-path-details');

    // Pathology Tests
    Route::get('/superadmin/super-addpath-test/{pid}', [SuperAllPathologyHandleController::class, 'addPathTestPageView']);
    Route::post('/superadmin/super-addpath-test/add/', [SuperAllPathologyHandleController::class, 'addPathTests'])->name('superadmin.super-addpath.test');
    Route::post('/superadmin/super-addpath-banner/add/', [SuperAllPathologyHandleController::class, 'addpathBanner'])->name('superadmin.super-addpath.banner');
    Route::delete('/superadmin/super-addpath/delete/{id}', [SuperAllPathologyHandleController::class, 'deletePathTest'])->name('superadmin.super-deletepath.test');
    Route::put('/superadmin/super-addpath/status/{id}', [SuperAllPathologyHandleController::class, 'statusPathTestEdit'])->name('superadmin.status.pathTest.edit');






    // All Doctors---------------------------------------------------------------------------------------------------------------------------------------->

    // All Doctors View
    Route::get('/superadmin/super-all-doctors', [SuperAllOnlyDoctorHandleController::class, 'docView'])->name('superadmin.super-all-doctor');
    Route::put('/superadmin/super-all-doctors/status/{id}', [SuperAllOnlyDoctorHandleController::class, 'statusEdit'])->name('superadmin.status.doc.edit');
    Route::delete('/superadmin/super-all-doctors/delete/{id}', [SuperAllOnlyDoctorHandleController::class, 'deleteDocContactDetails'])->name('superadmin.opd.doc.delete');

    // Doctors Contact Details
    Route::get('/superadmin/super-edit-doctors-details/{id}', [SuperAllOnlyDoctorHandleController::class, 'docEditPageView']);
    Route::put('/superadmin/super-edit-doctors-details/update/{id}', [SuperAllOnlyDoctorHandleController::class, 'updateDocContactDetails'])->name('superadmin.super-update-doc-details');

    // Doctor Banner
    Route::get('/superadmin/super-adddoc-banner/{pid}', [SuperAllOnlyDoctorHandleController::class, 'addDoctorPageView']);
    Route::post('/superadmin/super-adddoc-banner/add/', [SuperAllOnlyDoctorHandleController::class, 'adddocBanner'])->name('superadmin.super-adddoc.banner');







    // About Doctorwal------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/super-aboutus', [SuperAboutusController::class, 'index']);
    Route::post('/superadmin/super-aboutus', [SuperAboutusController::class, 'store'])->name('superadmin.super-aboutus.store');
    Route::put('/superadmin/super-aboutus/update/{id}', [SuperAboutusController::class, 'update'])->name('superadmin.super-aboutus.update');
    Route::delete('/superadmin/super-aboutus/delete/{id}', [SuperAboutusController::class, 'delete'])->name('superadmin.super-aboutus.delete');


    // Blogs Routes---------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/super-blogs', [SuperBlogController::class, 'index']);
    Route::post('/superadmin/super-blogs', [SuperBlogController::class, 'store'])->name('superadmin.super-blog.store');
    Route::put('/superadmin/super-blogs/update/{id}', [SuperBlogController::class, 'update'])->name('superadmin.super-blog.update');
    Route::delete('/superadmin/super-blogs/delete/{id}', [SuperBlogController::class, 'delete'])->name('superadmin.super-blog.delete');


    // Coupons Routes---------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/super-add-coupons', [SuperCouponController::class, 'index']);
    Route::post('/superadmin/super-add-coupons', [SuperCouponController::class, 'store'])->name('superadmin.super-coupon.store');
    Route::get('/superadmin/super-show-coupons', [SuperCouponController::class, 'show']);
    Route::put('/superadmin/super-show-coupons/update/{id}', [SuperCouponController::class, 'update'])->name('superadmin.super-coupon.update');
    Route::put('/superadmin/super-show-coupons/status/{id}', [SuperCouponController::class, 'updateStatus'])->name('superadmin.super-coupon.update.status');
    Route::delete('/superadmin/super-show-coupons/delete/{id}', [SuperCouponController::class, 'delete'])->name('superadmin.super-coupon.delete');



    // Subscription Routes---------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/super-add-subscriptions', [SuperSubscriptionController::class, 'index']);
    Route::post('/superadmin/super-add-subscriptions', [SuperSubscriptionController::class, 'store'])->name('superadmin.super-subs.store');
    Route::get('/superadmin/super-show-subscription', [SuperSubscriptionController::class, 'show']);
    Route::put('/superadmin/super-show-subscription/update/{id}', [SuperSubscriptionController::class, 'update'])->name('superadmin.super-subs.update');
    Route::put('/superadmin/super-show-subscription/status/{id}', [SuperSubscriptionController::class, 'updateStatus'])->name('superadmin.super-subs.update.status');
    Route::delete('/superadmin/super-show-subscription/delete/{id}', [SuperSubscriptionController::class, 'delete'])->name('superadmin.super-subs.delete');



    // Tickets Routes---------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/super-all-tickets', [SuperTicketController::class, 'index'])->name('superadmin.super-all-tickets');
    Route::put('/superadmin/super-all-tickets/reply/{id}', [SuperTicketController::class, 'addReply'])->name('superadmin.super-ticket-reply');
    Route::delete('/superadmin/super-all-tickets/delete/{id}', [SuperTicketController::class, 'delete'])->name('superadmin.super-ticket.delete');
    
    Route::get('/superadmin/super-ticket-replies', [SuperTicketController::class, 'showAllReplayed'])->name('superadmin.super-ticket-replies');
    Route::delete('/superadmin/super-ticket-replies/delete/{id}', [SuperTicketController::class, 'delete'])->name('superadmin.super-reply.delete');


    // User's Inquiries Routes---------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/super-user-inquiry', [SuperUserInquiryController::class, 'index']);
    Route::delete('/superadmin/super-user-inquiry/delete/{id}', [SuperUserInquiryController::class, 'delete'])->name('superadmin.super-user-inquiry.delete');
    
    
    // All Patient Inquiries Routes---------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/super-opd-inquiry', [SuperAllPatientInquiryController::class, 'indexOPD']);
    Route::delete('/superadmin/super-opd-inquiry/delete/{id}', [SuperAllPatientInquiryController::class, 'opdDelete'])->name('superadmin.super-opd-inquiry.delete');
    
    Route::get('/superadmin/super-path-inquiry', [SuperAllPatientInquiryController::class, 'indexPath']);
    Route::delete('/superadmin/super-path-inquiry/delete/{id}', [SuperAllPatientInquiryController::class, 'pathDelete'])->name('superadmin.super-path-inquiry.delete');
    
    Route::get('/superadmin/super-doc-inquiry', [SuperAllPatientInquiryController::class, 'indexDoc']);
    Route::delete('/superadmin/super-doc-inquiry/delete/{id}', [SuperAllPatientInquiryController::class, 'docDelete'])->name('superadmin.super-doc-inquiry.delete');
    
    
    // All Patient Feedback Routes---------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/super-all-feedback', [SuperAllFeedbacksController::class, 'index']);
    Route::delete('/superadmin/super-all-feedback/delete/{id}', [SuperAllFeedbacksController::class, 'delete'])->name('superadmin.feedback.delete');


    // OPD & Path & Doc & Partner & User Contact Details Exports---------------------------------------------------------------------------------------------------------------------------------------->
    Route::get('/superadmin/export-opd', [SuperAllOPDHandleController::class, 'exportAsExel'])->name('superadmin.export.opd');
    Route::get('/superadmin/export-path', [SuperAllPathologyHandleController::class, 'exportAsExel'])->name('superadmin.export.path');
    Route::get('/superadmin/export-doc', [SuperAllOnlyDoctorHandleController::class, 'exportAsExel'])->name('superadmin.export.doc');
    Route::get('/superadmin/export-partner', [SuperPartnerHandleController::class, 'exportAsExel'])->name('superadmin.export.partner');
    Route::get('/superadmin/export-user', [SuperAllUserController::class, 'exportAsExel'])->name('superadmin.export.user');
















    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
