<?php

namespace App\Http\Controllers;

use App\Models\PartnerModel;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Store a new partner.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function partner_register(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'partner_clinic_name' => 'required|string|max:255',
            'partner_contact_person_name' => 'required|string|max:255',
            'partner_mobile_number' => 'required|string|max:15',
            'partner_email' => 'required|email',
            'partner_state' => 'required|string',
            'partner_city' => 'required|string',
            'partner_pincode' => 'required|string|max:10',
            'partner_landmark' => 'required|string|max:255',
            'partner_address' => 'required|string',
            'partner_password' => 'required|string|min:8|confirmed',
            'partnerRegisterCaptchaInput' => 'required|string',
            'registration_type' => 'required|array',
        ]);


        // Generate doctorwala_partner_id
        $lastPartner = PartnerModel::latest('id')->first();
        $newId = $lastPartner ? 'DWPTR' . ($lastPartner->id + 1) : 'DWPTR1';

        // Create partner
        PartnerModel::create([
            
            'doctorwala_partner_id' => $newId,
            'partner_clinic_name' => $request->input('partner_clinic_name'),
            'partner_contact_person_name' => $request->input('partner_contact_person_name'),
            'partner_mobile_number' => $request->input('partner_mobile_number'),
            'partner_email' => $request->input('partner_email'),
            'partner_state' => $request->input('partner_state'),
            'partner_city' => $request->input('partner_city'),
            'partner_pincode' => $request->input('partner_pincode'),
            'partner_landmark' => $request->input('partner_landmark'),
            'partner_address' => $request->input('partner_address'),
            'partner_password' => $request->input('partner_password'),
            'partner_partnerRegisterCaptchaInput' => $request->input('partnerRegisterCaptchaInput'),
            'registration_type' => $request->input('registration_type'),
        ]);

        return redirect()->back()->with('success', 'Partner registered successfully.');
    }
}
