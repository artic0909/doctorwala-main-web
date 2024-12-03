<?php


// use App\Http\Controllers\DwPartnerController;
use App\Http\Controllers\DwUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:dwuser')->group(function () {
    Route::get('/user-auth', [DwUserController::class, 'viewUserLogForm']);
    Route::post('/user-register', [DwUserController::class, 'userRegForm'])->name('user-register');
    Route::post('/user-auth', [DwUserController::class, 'userLogin'])->name('user-login');

    // Dashboard Route (Protected by Partner Auth Middleware)
    Route::get('/dw/opd', function () {
        return view('opd');
    })->middleware(['auth:dwuser', 'verified'])->name('opd');
});


Route::middleware(['auth:dwuser', 'verified'])->group(function () {


    Route::get('/dw/opd', function () {
        return view('opd');
    })->name('opd');

    







    Route::post('/user-logout', [DwUserController::class, 'userlogout'])->name('user.logout');
});
