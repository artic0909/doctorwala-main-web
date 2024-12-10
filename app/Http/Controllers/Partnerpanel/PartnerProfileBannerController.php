<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerProfileBannerController extends Controller
{
    protected $guard = 'partner';




    public function showOPDBanner()
    {
        $partnerId = Auth::guard('partner')->id();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();

        $partner = Auth::guard('partner')->user();
        $registrationTypes = json_decode($partner->registration_type, true);

        return view('partnerpanel.partner-dashboard', compact('opdBanner', 'pathologyBanner','doctorBanner', 'registrationTypes'));
    }




    public function opdBannerStoreEdit(Request $request)
    {
        $partnerId = Auth::guard('partner')->id();

        $request->validate([
            'opdbanner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $opdBannerPath = null;


        if ($request->hasFile('opdbanner')) {

            $opdBannerPath = $request->file('opdbanner')->store('partner-opd-profile', 'public');
        }

        $opdBanner = PartnerOPDBannerModel::firstOrNew(['currently_loggedin_partner_id' => $partnerId]);

        if ($opdBannerPath) {
            $opdBanner->opdbanner = $opdBannerPath;
        }


        $opdBanner->save();


        return redirect()->back()->with('success', 'OPD Banner uploaded/updated successfully.');
    }





    public function pathologyBannerStoreEdit(Request $request)
    {
        $partnerId = Auth::guard('partner')->id();

        $request->validate([
            'pathologybanner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pathologyBannerPath = null;


        if ($request->hasFile('pathologybanner')) {

            $pathologyBannerPath = $request->file('pathologybanner')->store('partner-pathology-profile', 'public');
        }

        $pathologyBanner = PartnerPathologyBannerModel::firstOrNew(['currently_loggedin_partner_id' => $partnerId]);

        if ($pathologyBannerPath) {
            $pathologyBanner->pathologybanner = $pathologyBannerPath;
        }


        $pathologyBanner->save();


        return redirect()->back()->with('success', 'Pathology Banner uploaded/updated successfully.');
    }





    public function doctorBannerStoreEdit(Request $request)
    {
        $partnerId = Auth::guard('partner')->id();

        $request->validate([
            'doctorbanner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $doctorBannerPath = null;


        if ($request->hasFile('doctorbanner')) {

            $doctorBannerPath = $request->file('doctorbanner')->store('partner-doctor-profile', 'public');
        }

        $doctorBanner = PartnerDoctorBannerModel::firstOrNew(['currently_loggedin_partner_id' => $partnerId]);

        if ($doctorBannerPath) {
            $doctorBanner->doctorbanner = $doctorBannerPath;
        }


        $doctorBanner->save();


        return redirect()->back()->with('success', 'Doctor Banner uploaded/updated successfully.');
    }
}
