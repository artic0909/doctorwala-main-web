<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SuperCouponModel;
use Illuminate\Http\Request;

class ApiCouponsController extends Controller
{
        public function index()
    {
        $coupons = SuperCouponModel::latest()->get();

        return response()->json([
            'status' => true,
            'count' => $coupons->count(),
            'coupons' => $coupons,
        ]);
    }
}
