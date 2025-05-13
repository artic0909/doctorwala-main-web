<?php


use App\Http\Controllers\DwPartnerController;
use App\Http\Controllers\DwPartnerOTPController;
use App\Http\Controllers\Partnerpanel\PartnerAboutDetailsController;
use App\Http\Controllers\Partnerpanel\PartnerAllOPDInfoController;
use App\Http\Controllers\Partnerpanel\PartnerAllPathologyInfoController;
use App\Http\Controllers\Partnerpanel\PartnerDoctorContactController;
use App\Http\Controllers\Partnerpanel\PartnerGalleryController;
use App\Http\Controllers\Partnerpanel\PartnerInquiryController;
use App\Http\Controllers\Partnerpanel\PartnerOPDContactController;
use App\Http\Controllers\Partnerpanel\PartnerPathologyContactController;
use App\Http\Controllers\Partnerpanel\PartnerPatientFeedbackController;
use App\Http\Controllers\Partnerpanel\PartnerPatientInquiryController;
use App\Http\Controllers\Partnerpanel\PartnerProfileBannerController;
use App\Http\Controllers\Partnerpanel\PartnerServiceListController;
use App\Http\Controllers\Partnerpanel\PartnerSubscriptionController;
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









    // Payments GateWate--------------------------------------------------------------------------------------------------------------------------->
    Route::get('/partnerpanel/partner-show-invoice', [PartnerSubscriptionController::class, 'showInvoice'])->name('partnerpanel.partner-invoice');
    Route::get('/partnerpanel/partner-get-subscription', [PartnerSubscriptionController::class, 'allSubscriptions'])->name('partnerpanel.partner-subscription');
    Route::post('/partnerpanel/payment/initiate', [PartnerSubscriptionController::class, 'payment'])->name('partnerpanel.payment.initiate');


    Route::post('/partnerpanel/payment-callback', [PartnerSubscriptionController::class, 'paymentCallback'])->name('partnerpanel.payment.callback');


    
    Route::get('/partnerpanel/partner-dashboard', [DwPartnerController::class, 'partnerdashboardview'])->name('partnerpanel.partner-dashboard');

    Route::get('/partnerpanel/partner-coupon', [DwPartnerController::class, 'partnerCouponCodeAddView'])->name('partnerpanel.partner-coupon');
    


    
    // Failed Payment Route
    Route::get('/partnerpanel/failed', function () {
        return view('subscription_failed');
    })->name('partnerpanel.sub-fail');







    Route::get('/partnerpanel/partnerpanel/partner-profile', function () {
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

    Route::get('/partnerpanel/partner-inquiry-from-patients', function () {
        return view('partnerpanel.partner-inquiry-from-patients');
    })->name('partnerpanel.partner-inquiry-from-patients');

    // Route::get('/partnerpanel/partner-get-subscription', function () {
    //     return view('partnerpanel.partner-get-subscription');
    // })->name('partnerpanel.partner-get-subscription');

    // Route::get('/partnerpanel/partner-show-invoice', function () {
    //     return view('partnerpanel.partner-show-invoice');
    // })->name('partnerpanel.partner-show-invoice');

    Route::get('/partnerpanel/partner-get-ticket', function () {
        return view('partnerpanel.partner-get-ticket');
    })->name('partnerpanel.partner-get-ticket');

    Route::get('/partnerpanel/partner-show-ticket', function () {
        return view('partnerpanel.partner-show-ticket');
    })->name('partnerpanel.partner-show-ticket');

    Route::get('/partnerpanel/partner-feedbacks', function () {
        return view('partnerpanel.partner-feedbacks');
    })->name('partnerpanel.partner-feedbacks');









    // Route to show the profile edit page
    Route::get('/partnerpanel/partner-profile', [ProfileEditController::class, 'partnerProfileEditWithCurrentPartnerDetails']);

    // Route to update the profile details
    Route::post('/partnerpanel/partner-profile-update', [ProfileEditController::class, 'updateProfile'])->name('partner.profile.update');

    // Route to update the password
    Route::post('/partnerpanel/partner-password-update', [ProfileEditController::class, 'updatePassword'])->name('partner.password.update');




    // Route of the OPD contact page
    Route::get('/partnerpanel/partner-opd-contact', [PartnerOPDContactController::class, 'create'])->name('partner.opd.contact.create');
    Route::post('/partnerpanel/partner-opd-contact', [PartnerOPDContactController::class, 'store'])->name('partner.opd.contact.store');

    // Route of the Pathology contact page
    Route::get('/partnerpanel/partner-pathology-contact', [PartnerPathologyContactController::class, 'create'])->name('partner.pathology.contact.create');
    Route::post('/partnerpanel/partner-pathology-contact', [PartnerPathologyContactController::class, 'store'])->name('partner.pathology.contact.store');


    // Route of the Partner About Details
    Route::get('/partnerpanel/partner-about-clinic', [PartnerAboutDetailsController::class, 'create'])->name('partner.about.details.create');
    Route::post('/partnerpanel/partner-about-clinic', [PartnerAboutDetailsController::class, 'store'])->name('partner.about.details.store');


    // Route of the Partner Service Lists
    Route::get('/partnerpanel/partner-service-lists', [PartnerServiceListController::class, 'index'])->name('partner.services.index'); // View services
    Route::post('/partnerpanel/partner-service-lists/store', [PartnerServiceListController::class, 'store'])->name('partner.services.store'); // Add service
    Route::post('/partnerpanel/partner-service-lists/update/{index}', [PartnerServiceListController::class, 'update'])->name('partner.services.update'); // Update service
    Route::delete('/partnerpanel/partner-service-lists/delete/{index}', [PartnerServiceListController::class, 'destroy'])->name('partner.services.delete'); // Delete service


    // Route of the Partner Gallery
    Route::get('/partnerpanel/partner-gallery', [PartnerGalleryController::class, 'index'])->name('partner.gallery.index');
    Route::post('/partnerpanel/partner-gallery/store', [PartnerGalleryController::class, 'store'])->name('partner.gallery.store');
    Route::post('/partnerpanel/partner-gallery/update/{index}', [PartnerGalleryController::class, 'update'])->name('partner.gallery.update');
    Route::delete('/partnerpanel/partner-gallery/delete/{index}', [PartnerGalleryController::class, 'destroy'])->name('partner.gallery.delete');




    // Route to store OPD doctor information
    Route::get('/partnerpanel/partner-opd', [PartnerAllOPDInfoController::class, 'index'])->name('partner.opd.index');
    Route::post('/partnerpanel/partner-opd', [PartnerAllOPDInfoController::class, 'store'])->name('partner.opd.store');
    // Route to Show OPD Doctor information
    Route::get('/partnerpanel/partner-opd-show', [PartnerAllOPDInfoController::class, 'showStoredData'])->name('partner.opd.show');
    Route::put('/partnerpanel/partner-opd-show/update/{id}', [PartnerAllOPDInfoController::class, 'updateStoredData'])->name('partner.opd.update');
    Route::delete('/partnerpanel/partner-opd-show/delete/{id}', [PartnerAllOPDInfoController::class, 'destroy'])->name('partner.opd.delete');





    // Route to store Pathology information
    Route::get('/partnerpanel/partner-pathology', [PartnerAllPathologyInfoController::class, 'index'])->name('partner.pathology.index');
    Route::post('/partnerpanel/partner-pathology', [PartnerAllPathologyInfoController::class, 'store'])->name('partner.pathology.store');
    // Route to Show Pathology information
    Route::get('/partnerpanel/partner-pathology-show', [PartnerAllPathologyInfoController::class, 'showStoredData'])->name('partner.pathology.show');
    Route::put('/partnerpanel/partner-pathology-show/update/{id}', [PartnerAllPathologyInfoController::class, 'updateStoredData'])->name('partner.pathology.update');
    Route::delete('/partnerpanel/partner-pathology-show/delete/{id}', [PartnerAllPathologyInfoController::class, 'destroy'])->name('partner.pathology.delete');




    // Routes for Doctor
    Route::get('/partnerpanel/partner-doctors', [PartnerDoctorContactController::class, 'index'])->name('partner.doctor.contact.index');
    Route::post('/partnerpanel/partner-doctors', [PartnerDoctorContactController::class, 'store'])->name('partner.doctor.contact.store');


    // Routes for get tickets & show tickets
    Route::get('/partnerpanel/partner-get-ticket', [PartnerInquiryController::class, 'create'])->name('partner.inquiries.create');
    Route::post('/partnerpanel/partner-get-ticket', [PartnerInquiryController::class, 'store'])->name('partner.inquiries.store');
    Route::delete('/partnerpanel/partner-show-ticket/{inquiry}', [PartnerInquiryController::class, 'destroy'])->name('inquiries.destroy');
    Route::get('/partnerpanel/partner-show-ticket', [PartnerInquiryController::class, 'index'])->name('partner.inquiries.index');


    // Routes for Partner Profile Banner Upload
    Route::post('/partnerpanel/partner-dashboard', [PartnerProfileBannerController::class, 'opdBannerStoreEdit'])->name('partner.opd.banner.store');
    Route::post('/partnerpanel/partner-dashboard/pathology', [PartnerProfileBannerController::class, 'pathologyBannerStoreEdit'])->name('partner.pathology.banner.store');
    Route::post('/partnerpanel/partner-dashboard/doctor', [PartnerProfileBannerController::class, 'doctorBannerStoreEdit'])->name('partner.doctor.banner.store');




    // Routes for Patient Inquiry
    Route::get('/partnerpanel/partner-inquiry-from-patients', [PartnerPatientInquiryController::class, 'create'])->name('partner.patient.inquiry.index');
    Route::delete('/partnerpanel/partner-inquiry-from-patients/delete/{id}', [PartnerPatientInquiryController::class, 'delete'])->name('partner.patient.inquiry.delete');


    // Routes for Patient Feedback
    Route::get('/partnerpanel/partner-feedbacks', [PartnerPatientFeedbackController::class, 'index'])->name('partner.patient.feddback.index');


    // Coupon Code Get Route
    Route::post('/partnerpanel/get-coupon-details', [DwPartnerController::class, 'getCouponDetails'])->name('get.coupon.details');
    Route::post('/partnerpanel/add-coupon-details', [DwPartnerController::class, 'partnerCouponCodeAdd'])->name('partner.coupon.code.add');




    // ===========================================================================================================
    // ========================================== Partner Restricted Routes End ==================================
    // ===========================================================================================================








    Route::post('/partner-logout', [DwPartnerController::class, 'partnerlogout'])->name('partner.logout');
});
