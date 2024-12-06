<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\PartnerPathologyContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerPathologyContactController extends Controller
{
    public function create()
    {
        $partnerId = Auth::guard('partner')->id();

        $partner = Auth::guard('partner')->user();
        $registrationTypes = json_decode($partner->registration_type, true);

        $contactDetails = PartnerPathologyContactModel::where('currently_loggedin_partner_id', $partnerId)->first();

        return view('partnerpanel.partner-pathology-contact', compact('contactDetails', 'registrationTypes'));
    }

    public function store(Request $request)
    {
        $partnerId = Auth::guard('partner')->id();

        $request->validate([
            'clinic_registration_type' => 'required|string',
            'clinic_contact_person_name' => 'required|string|max:255',
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

        $contactDetails = PartnerPathologyContactModel::where('currently_loggedin_partner_id', $partnerId)->first();

        if ($contactDetails) {
            // Update the existing record
            $contactDetails->update([
                'clinic_registration_type' => $request->clinic_registration_type,
                'clinic_contact_person_name' => $request->clinic_contact_person_name,
                'clinic_gstin' => $request->clinic_gstin,
                'clinic_mobile_number' => $request->clinic_mobile_number,
                'clinic_email' => $request->clinic_email,
                'clinic_landmark' => $request->clinic_landmark,
                'clinic_pincode' => $request->clinic_pincode,
                'clinic_state' => $request->clinic_state,
                'clinic_city' => $request->clinic_city,
                'clinic_google_map_link' => $request->clinic_google_map_link,
                'clinic_address' => $request->clinic_address,
            ]);

            return redirect()->route('partner.pathology.contact.create')->with('success', 'Contact details updated successfully.');
        } else {
            // Create a new record
            PartnerPathologyContactModel::create([
                'currently_loggedin_partner_id' => $partnerId,
                'clinic_registration_type' => $request->clinic_registration_type,
                'clinic_contact_person_name' => $request->clinic_contact_person_name,
                'clinic_gstin' => $request->clinic_gstin,
                'clinic_mobile_number' => $request->clinic_mobile_number,
                'clinic_email' => $request->clinic_email,
                'clinic_landmark' => $request->clinic_landmark,
                'clinic_pincode' => $request->clinic_pincode,
                'clinic_state' => $request->clinic_state,
                'clinic_city' => $request->clinic_city,
                'clinic_google_map_link' => $request->clinic_google_map_link,
                'clinic_address' => $request->clinic_address,
            ]);

            return redirect()->route('partner.pathology.contact.create')->with('success', 'Contact details saved successfully.');
        }
    }
}
