<?php


// use App\Http\Controllers\DwPartnerController;
use App\Http\Controllers\DwUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:dwuser')->group(function () {
    Route::get('/dw/user-auth', [DwUserController::class, 'viewUserLogForm'])->name('dw.user-auth');
    Route::post('/dw/user-register', [DwUserController::class, 'userRegForm'])->name('user-register');
    Route::post('/dw/user-auth', [DwUserController::class, 'userLogin'])->name('dw.user-login');
});


Route::middleware(['auth:dwuser', 'verified'])->group(function () {




    // ===========================================================================================================
    // ========================================== User Restricted Routes Start ===================================
    // ===========================================================================================================
    Route::get('/dw/opd', function () {
        return view('opd');
    })->name('dw.opd');

    Route::get('/dw/doctor', function () {
        return view('doctor');
    })->name('dw.doctor');


    Route::get('/dw/pathology', function () {
        return view('pathology');
    })->name('dw.pathology');
    // ===========================================================================================================
    // ========================================== User Restricted Routes End =====================================
    // ===========================================================================================================







    Route::post('/user-logout', [DwUserController::class, 'userlogout'])->name('user.logout');
});
