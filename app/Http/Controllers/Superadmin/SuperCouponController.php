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
            'coupon_code' => 'required|string',
            'coupon_amount' => 'required|string',
            'coupon_start_date' => 'nullable|string', // Set automatically if not provided
            'coupon_end_date' => 'nullable|string|date|after_or_equal:coupon_start_date', // Ensure end date is after start date
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

        return redirect('/superadmin/super-show-coupons')->with('success', 'Coupon added successfully!');
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






    public function updateStatus(Request $request, $id) // make it in automation 
    {
        $validated = $request->validate([
            'status' => 'required|string',
        ]);

        // Find the coupon in the SuperCouponModel
        $couponInfo = SuperCouponModel::findOrFail($id);
        $couponInfo->status = $request->input('status');
        $couponInfo->save();

        // If the coupon status is set to Inactive
        if ($request->input('status') === 'Inactive') {
            // Find all CouponHolderModel entries associated with this coupon code
            $couponHolders = CouponHolderModel::where('coupon_code', $couponInfo->coupon_code)->get();

            foreach ($couponHolders as $holder) {
                // Update the DwPartnerModel status to Inactive
                DwPartnerModel::where('id', $holder->currently_loggedin_partner_id)->update(['status' => 'Inactive']);

                // Update related models
                PartnerOPDContactModel::where('currently_loggedin_partner_id', $holder->currently_loggedin_partner_id)
                    ->update(['status' => 'Inactive']);
                PartnerPathologyContactModel::where('currently_loggedin_partner_id', $holder->currently_loggedin_partner_id)
                    ->update(['status' => 'Inactive']);
                PartnerDoctorContactModel::where('currently_loggedin_partner_id', $holder->currently_loggedin_partner_id)
                    ->update(['status' => 'Inactive']);
            }
        }elseif($request->input('status') === 'Active'){
            $couponHolders = CouponHolderModel::where('coupon_code', $couponInfo->coupon_code)->get();

            foreach ($couponHolders as $holder) {
                // Update the DwPartnerModel status to Active
                DwPartnerModel::where('id', $holder->currently_loggedin_partner_id)->update(['status' => 'Active']);

                // Update related models
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
