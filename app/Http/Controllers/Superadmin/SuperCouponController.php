<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\CouponHolderModel;
use App\Models\DwPartnerModel;
use App\Models\PartnerDoctorContactModel;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerPathologyContactModel;
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
            'coupon_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'coupon_code' => 'required|string|unique:super_coupon_models,coupon_code',
            'coupon_amount' => 'required|string',
            'coupon_start_date' => 'nullable|string',
            'coupon_end_date' => 'nullable|string|date|after_or_equal:coupon_start_date',
        ]);

        $filePath = null;

        try {
            if ($request->hasFile('coupon_image')) {
                $file = $request->file('coupon_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/coupon-image', $fileName, 'public');
            }

            $couponCode = $request->input('coupon_code');
            if ($couponCode && !str_starts_with($couponCode, 'DWCPN')) {
                $couponCode = 'DWCPN' . $couponCode;
            }

            $couponStartDate = $request->input('coupon_start_date') ?: now()->toDateString();
            $status = 'Active';
            if ($request->input('coupon_end_date') && now()->greaterThan($request->input('coupon_end_date'))) {
                $status = 'Inactive';
            }

            SuperCouponModel::create([
                'coupon_image' => $filePath,
                'coupon_code' => $couponCode,
                'coupon_amount' => $request->input('coupon_amount'),
                'coupon_start_date' => $couponStartDate,
                'coupon_end_date' => $request->input('coupon_end_date'),
                'status' => $status,
            ]);

            return redirect()->back()->with('success', true);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', true);
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|string',
        ]);


        $couponInfo = SuperCouponModel::findOrFail($id);
        $couponInfo->status = $request->input('status');
        $couponInfo->save();


        if ($request->input('status') === 'Inactive') {

            $couponHolders = CouponHolderModel::where('coupon_code', $couponInfo->coupon_code)->get();

            foreach ($couponHolders as $holder) {

                DwPartnerModel::where('id', $holder->currently_loggedin_partner_id)->update(['status' => 'Inactive']);


                PartnerOPDContactModel::where('currently_loggedin_partner_id', $holder->currently_loggedin_partner_id)
                    ->update(['status' => 'Inactive']);
                PartnerPathologyContactModel::where('currently_loggedin_partner_id', $holder->currently_loggedin_partner_id)
                    ->update(['status' => 'Inactive']);
                PartnerDoctorContactModel::where('currently_loggedin_partner_id', $holder->currently_loggedin_partner_id)
                    ->update(['status' => 'Inactive']);
            }
        } elseif ($request->input('status') === 'Active') {
            $couponHolders = CouponHolderModel::where('coupon_code', $couponInfo->coupon_code)->get();

            foreach ($couponHolders as $holder) {

                DwPartnerModel::where('id', $holder->currently_loggedin_partner_id)->update(['status' => 'Active']);


                PartnerOPDContactModel::where('currently_loggedin_partner_id', $holder->currently_loggedin_partner_id)
                    ->update(['status' => 'Active']);
                PartnerPathologyContactModel::where('currently_loggedin_partner_id', $holder->currently_loggedin_partner_id)
                    ->update(['status' => 'Active']);
                PartnerDoctorContactModel::where('currently_loggedin_partner_id', $holder->currently_loggedin_partner_id)
                    ->update(['status' => 'Active']);
            }
        }

        return back()->with('success', 'Updated successfully!');
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
