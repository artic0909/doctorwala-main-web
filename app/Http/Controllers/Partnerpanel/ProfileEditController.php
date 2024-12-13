<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\DwPartnerModel;
use App\Models\PartnerAllOPDDoctorModel;
use App\Models\PartnerAllPathologyTestModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerPathologyContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileEditController extends Controller
{
    protected $guard = 'partner';





    public function partnerProfileEditWithCurrentPartnerDetails()
    {
        $partner = Auth::guard('partner')->user();
        $registrationTypes = $partner->registration_type;

        if (is_string($registrationTypes)) {
            $registrationTypes = json_decode($registrationTypes, true);
        }

        // Continue with your existing code
        $partnerId = Auth::guard('partner')->id();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();

        return view('partnerpanel.partner-profile', compact('opdBanner', 'pathologyBanner', 'doctorBanner', 'partner', 'registrationTypes'));
    }







    public function updateProfile(Request $request)
    {
        $request->validate([
            'partner_clinic_name' => 'required|string|max:255',
            'partner_contact_person_name' => 'required|string|max:255',
            'partner_mobile_number' => 'required|string|max:15',
            'partner_email' => 'required|email|max:255',
            'partner_state' => 'required|string|max:255',
            'partner_city' => 'required|string|max:255',
            'registration_type' => 'required|array',
            'registration_type.*' => 'string',
        ]);

        $partnerId = Auth::guard('partner')->id();


        $partner = DwPartnerModel::find($partnerId);
        $oldRegistrationType = is_array($partner->registration_type) ? $partner->registration_type : json_decode($partner->registration_type, true);


        $profileUpdateResult = DB::table('dw_partner_models')
            ->where('id', $partnerId)
            ->update([
                'partner_clinic_name' => $request->partner_clinic_name,
                'partner_contact_person_name' => $request->partner_contact_person_name,
                'partner_mobile_number' => $request->partner_mobile_number,
                'partner_email' => $request->partner_email,
                'partner_state' => $request->partner_state,
                'partner_city' => $request->partner_city,
                'registration_type' => json_encode($request->registration_type),
            ]);


        $newRegistrationType = $request->registration_type;


        if (in_array('OPD', $oldRegistrationType) && !in_array('OPD', $newRegistrationType)) {

            PartnerOPDContactModel::where('currently_loggedin_partner_id', $partnerId)->delete();
            PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partnerId)->delete();
            PartnerAllOPDDoctorModel::where('currently_loggedin_partner_id', $partnerId)->delete();
        }

        if (in_array('Pathology', $oldRegistrationType) && !in_array('Pathology', $newRegistrationType)) {

            PartnerPathologyContactModel::where('currently_loggedin_partner_id', $partnerId)->delete();
            PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partnerId)->delete();
            PartnerAllPathologyTestModel::where('currently_loggedin_partner_id', $partnerId)->delete();
        }

        if (in_array('OPD', $newRegistrationType) && !in_array('OPD', $oldRegistrationType)) {
            // If OPD is added, you can create new OPD records (if required)
            // PartnerOPDContactModel::create(['currently_loggedin_partner_id' => $partnerId, ...]);
        }

        if (in_array('Pathology', $newRegistrationType) && !in_array('Pathology', $oldRegistrationType)) {
            // If Pathology is added, you can create new Pathology records (if required)
            // PartnerPathologyContactModel::create(['currently_loggedin_partner_id' => $partnerId, ...]);
        }

        if ($profileUpdateResult) {
            return back()->with('profile_update_status', 'success');
        } else {
            return back()->with('profile_update_status', 'failure');
        }
    }








    public function updatePassword(Request $request)
    {

        $request->validate([
            'partner_password' => 'required|string|min:8',
        ]);


        $partnerId = Auth::guard('partner')->id();

        if (!$partnerId) {
            return back()->withErrors(['message' => 'Partner not found or not logged in']);
        }


        $newPassword = Hash::make($request->partner_password);



        $updateResult = DB::table('dw_partner_models')
            ->where('id', $partnerId)
            ->update([
                'partner_password' => $newPassword,
            ]);

        if ($updateResult) {
            return back()->with('password_update_status', 'success');
        } else {
            return back()->with('password_update_status', 'failure');
        }
    }
}
