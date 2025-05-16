<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\Api\ApiUserLoginController;
use App\Http\Controllers\Api\ApiUserRegisterController;
use App\Http\Controllers\Api\ApiUserProfileEditController;

Route::post('/dw-user-register', [ApiUserRegisterController::class, 'register']);
Route::post('/dw-user-login', [ApiUserLoginController::class, 'login']);
Route::post('/dw-user-logout', [ApiUserLoginController::class, 'logout']);


Route::post('/update-profile', [ApiUserProfileEditController::class, 'updateProfile']);

