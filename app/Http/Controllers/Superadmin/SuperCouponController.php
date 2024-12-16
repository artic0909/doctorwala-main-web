<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\SuperCouponModel;
use Illuminate\Http\Request;

class SuperCouponController extends Controller
{
    public function index()
    {
        return view('superadmin.super-add-coupons');
    }


    public function show()
    {

        $coupons = SuperCouponModel::orderBy('id', 'desc')->get();

        return view('superadmin.super-show-coupons', compact('coupons'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'coupon_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'coupon_code' => 'nullable|string',
            'coupon_amount' => 'nullable|string',
            'coupon_start_date' => 'nullable|string',
            'coupon_end_date' => 'nullable|string',
        ]);

        $filePath = null;

        if ($request->hasFile('coupon_image')) {
            try {
                $file = $request->file('coupon_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/coupon-image', $fileName, 'public');
            } catch (\Exception $e) {
                return back()->withErrors(['coupon_image' => 'File upload failed. Please try again.']);
            }
        }

        $couponCode = $request->input('coupon_code');
        if ($couponCode) {
            if (!str_starts_with($couponCode, 'DWCPN')) {
                $couponCode = 'DWCPN' . $couponCode;
            }
        }

        SuperCouponModel::create([
            'coupon_image' => $filePath,
            'coupon_code' => $couponCode,
            'coupon_amount' => $request->input('coupon_amount'),
            'coupon_start_date' => $request->input('coupon_start_date'),
            'coupon_end_date' => $request->input('coupon_end_date'),
        ]);

        return redirect('/superadmin/super-show-coupons')->with('success', 'Added Successfully!');
    }


    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'coupon_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'coupon_code' => 'nullable|string',
            'coupon_amount' => 'nullable|string',
            'coupon_start_date' => 'nullable|string',
            'coupon_end_date' => 'nullable|string',
        ]);

        $couponInfo = SuperCouponModel::find($id);

        if ($couponInfo) {
            if ($request->hasFile('coupon_image')) {

                if (file_exists(public_path('storage/' . $couponInfo->coupon_image))) {
                    unlink(public_path('storage/' . $couponInfo->coupon_image));
                }


                $file = $request->file('coupon_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/coupon-image', $fileName, 'public');
                $couponInfo->coupon_image = $filePath;
            }

            $couponInfo->coupon_code = $request->input('coupon_code');
            $couponInfo->coupon_amount = $request->input('coupon_amount');
            $couponInfo->coupon_start_date = $request->input('coupon_start_date');
            $couponInfo->coupon_end_date = $request->input('coupon_end_date');
            $couponInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }


    public function updateStatus(Request $request, $id)
    {

        $validated = $request->validate([
            'status' => 'required|string',
        ]);

        $couponInfo = SuperCouponModel::find($id);
        $couponInfo->status = $request->input('status');
        $couponInfo->save();

        return back()->with('success', 'updated successfully!');
    }


    public function delete($id)
    {
        $couponInfo = SuperCouponModel::find($id);

        if ($couponInfo) {

            if (file_exists(public_path('storage/' . $couponInfo->coupon_image))) {
                unlink(public_path('storage/' . $couponInfo->coupon_image));
            }


            $couponInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
