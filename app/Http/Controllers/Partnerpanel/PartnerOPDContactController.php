<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\DwPartnerModel;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerOPDContactController extends Controller
{
    public function create()
    {
        $partnerId = Auth::guard('partner')->id();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();

        $partner = Auth::guard('partner')->user();
        $registrationTypes = $partner->registration_type;

        if (is_string($registrationTypes)) {
            $registrationTypes = json_decode($registrationTypes, true);
        }


        $contactDetails = PartnerOPDContactModel::where('currently_loggedin_partner_id', $partnerId)->first();

        return view('partnerpanel.partner-opd-contact', compact('opdBanner', 'pathologyBanner', 'doctorBanner', 'contactDetails', 'registrationTypes'));
    }





    public function store(Request $request)
    {
     
        $partnerId = Auth::guard('partner')->id();
        $partnerStatus = Auth::guard('partner')->user()->status;

        $request->validate([
            'clinic_registration_type' => 'required|string',
            'clinic_contact_person_name' => 'required|string|max:255',
            'clinic_name' => 'required|string',
            'clinic_gstin' => 'nullable|string',
            'clinic_mobile_number' => 'required|string|max:15',
            'clinic_email' => 'required|email|max:255',
            'clinic_landmark' => 'required|string|max:255',
            'clinic_pincode' => 'required|numeric|digits:6',
            'clinic_state' => 'required|string|max:255',
            'clinic_city' => 'required|string|max:255',
            'clinic_google_map_link' => 'nullable|string|max:500',
            'clinic_address' => 'required|string',
        ]);

     
        $contactDetails = PartnerOPDContactModel::where('currently_loggedin_partner_id', $partnerId)
            ->where('status', $partnerStatus)
            ->first();

        if ($contactDetails) {

            $contactDetails->update([
                'clinic_registration_type' => $request->clinic_registration_type,
                'clinic_contact_person_name' => $request->clinic_contact_person_name,
                'clinic_name' => $request->clinic_name,
                'clinic_gstin' => $request->clinic_gstin,
                'clinic_mobile_number' => $request->clinic_mobile_number,
                'clinic_email' => $request->clinic_email,
                'clinic_landmark' => $request->clinic_landmark,
                'clinic_pincode' => $request->clinic_pincode,
                'clinic_state' => $request->clinic_state,
                'clinic_city' => $request->clinic_city,
                'clinic_google_map_link' => $request->clinic_google_map_link,
                'clinic_address' => $request->clinic_address,
                'status' => $partnerStatus,
            ]);

            return redirect()->route('partner.opd.contact.create')->with('success', 'Contact details updated successfully.');
        } else {
            
            PartnerOPDContactModel::create([
                'currently_loggedin_partner_id' => $partnerId,
                'clinic_registration_type' => $request->clinic_registration_type,
                'clinic_contact_person_name' => $request->clinic_contact_person_name,
                'clinic_name' => $request->clinic_name,
                'clinic_gstin' => $request->clinic_gstin,
                'clinic_mobile_number' => $request->clinic_mobile_number,
                'clinic_email' => $request->clinic_email,
                'clinic_landmark' => $request->clinic_landmark,
                'clinic_pincode' => $request->clinic_pincode,
                'clinic_state' => $request->clinic_state,
                'clinic_city' => $request->clinic_city,
                'clinic_google_map_link' => $request->clinic_google_map_link,
                'clinic_address' => $request->clinic_address,
                'status' => $partnerStatus,
            ]);

            return redirect()->route('partner.opd.contact.create')->with('success', 'Contact details saved successfully.');
        }
    }
}
