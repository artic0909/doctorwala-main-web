<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\PartnerOPDContactModel;
use Illuminate\Http\Request;

class PartnerOPDContactController extends Controller
{

    protected $guard = 'partner';



    public function showForm($partnerId = null)
    {
        $contactDetails = $partnerId ? PartnerOPDContactModel::where('partner_id', $partnerId)->first() : null;

        return view('partner_opd_form', compact('contactDetails'));
    }




    

    public function saveContactDetails(Request $request, $partnerId = null)
    {
        $validated = $request->validate([
            'clinic_contact_person_name' => 'required|string|max:255',
            'clinic_gst_number' => 'nullable|string|max:15',
            'clinic_email' => 'required|email',
            'clinic_landmark' => 'required|string|max:255',
            'clinic_pincode' => 'required|string|max:10',
            'clinic_google_map_link' => 'nullable|string|max:255',
            'clinic_state' => 'required|string',
            'clinic_city' => 'required|string',
            'clinic_address' => 'required|string',
        ]);

        if ($partnerId) {
            $contactDetails = PartnerOPDContactModel::where('partner_id', $partnerId)->first();
            if ($contactDetails) {
                $contactDetails->update($validated);
                return redirect()->back()->with('success', 'Contact details updated successfully.');
            } else {
                return redirect()->back()->with('error', 'Partner not found.');
            }
        } else {
            PartnerOPDContactModel::create([
                'partner_id' => $request->partner_id,
                'registration_type' => ['OPD'],
                ...$validated
            ]);

            return redirect()->back()->with('success', 'Contact details added successfully.');
        }
    }
}
