<?php

use App\Http\Controllers\Api\ApiAllDoctorController;
use App\Http\Controllers\Api\ApiAllOPDController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiBlogController;
use App\Http\Controllers\Api\ApiAllPathologyController;
use App\Http\Controllers\Api\ApiCouponsController;

// create api routes here for flutter app ------------------------------->


// Sidebar Routes=================================================>
Route::get('/api/blogs', [ApiBlogController::class, 'index']);



// Home Screen Routes==================================================>
Route::get('/api/all-pathology-contacts', [ApiAllPathologyController::class, 'allPathologyData']);
Route::get('/api/all-opd-contacts', [ApiAllOPDController::class, 'allOpdData']);
Route::get('/api/all-doctors-contacts', [ApiAllDoctorController::class, 'allDoctorData']);
Route::get('/api/all-coupons', [ApiCouponsController::class, 'index']);
