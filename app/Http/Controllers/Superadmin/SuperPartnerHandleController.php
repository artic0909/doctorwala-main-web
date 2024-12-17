<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\DwPartnerModel;
use App\Models\PartnerAllOPDDoctorModel;
use App\Models\PartnerAllPathologyTestModel;
use App\Models\PartnerDoctorContactModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerPathologyBannerModel;
use App\Models\PartnerPathologyContactModel;
use Illuminate\Http\Request;

class SuperPartnerHandleController extends Controller
{
    public function addPartnerView()
    {

        return view('superadmin.super-add-partners');
    }




    public function addPartners(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'partner_clinic_name' => 'required|string|max:255',
            'partner_contact_person_name' => 'required|string|max:255',
            'partner_mobile_number' => 'required|string|max:15',
            'partner_email' => 'required|string|email|max:255',
            'partner_state' => 'required|string',
            'partner_city' => 'required|string',
            'partner_pincode' => 'required|string',
            'partner_landmark' => 'required|string',
            'partner_address' => 'required|string',
            'partner_password' => 'required|string',
            'registration_type' => 'required|array',
            'registration_type.*' => 'string',
        ]);

        // Generate partner ID
        $partnerCount = DwPartnerModel::count();
        $partnerId = 'DWPTR' . ($partnerCount + 1);

        // Create new partner record
        $dwuser = new DwPartnerModel($validated);
        $dwuser->partner_id = $partnerId;
        $dwuser->partner_password = bcrypt($request->partner_password);
        $dwuser->registration_type = json_encode($request->registration_type);

        // Save partner
        $dwuser->save();

        // Check if Doctor is selected as a registration type
        if (in_array('Doctor', $request->registration_type)) {
            // Create dummy data for Doctor in PartnerDoctorContactModel
            PartnerDoctorContactModel::create([
                'currently_loggedin_partner_id' => $dwuser->id, // The partner ID from the created partner
                'clinic_registration_type' => 'Doctor', // Setting registration type as 'Doctor'
                'partner_doctor_name' => 'null', // Add any necessary default values (e.g., null for now)
                'partner_doctor_specialist' => 'null',
                'partner_doctor_designation' => 'null',
                'partner_doctor_fees' => '1000',
                'partner_doctor_mobile' => '1234567890',
                'partner_doctor_email' => 'null@gmail.com',
                'partner_doctor_landmark' => 'null',
                'partner_doctor_pincode' => '123456',
                'partner_doctor_google_map_link' => 'null',
                'partner_doctor_state' => 'null',
                'partner_doctor_city' => 'null',
                'partner_doctor_address' => 'null',
                'visit_day_time' => json_encode([]),
            ]);
        }

        // Redirect back with success message
        return redirect()->route('superadmin.super-all-partner.get')->with('success', 'Registration successful! Please log in.');
    }







    public function editPartnerDetails(Request $request, $id)
    {
        // Find the partner record
        $partner = DwPartnerModel::findOrFail($id);

        // Get the old registration types
        $oldRegistrationTypes = json_decode($partner->registration_type, true);

        // Validate the incoming request
        $validated = $request->validate([
            'partner_clinic_name' => 'required|string|max:255',
            'partner_contact_person_name' => 'required|string|max:255',
            'partner_mobile_number' => 'required|string|max:15',
            'partner_email' => 'required|string|email|max:255',
            'partner_state' => 'required|string',
            'partner_city' => 'required|string',
            'partner_pincode' => 'required|string',
            'partner_landmark' => 'required|string',
            'partner_address' => 'required|string',
            'registration_type' => 'required|array',
            'registration_type.*' => 'string',
        ]);

        // Get the new registration types
        $newRegistrationTypes = $validated['registration_type'];

        // Find removed types
        $removedTypes = array_diff($oldRegistrationTypes, $newRegistrationTypes);

        // Handle deletions based on removed types
        if (in_array('OPD', $removedTypes)) {
            PartnerOPDContactModel::where('currently_loggedin_partner_id', $partner->id)->delete();
            PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partner->id)->delete();
            PartnerAllOPDDoctorModel::where('currently_loggedin_partner_id', $partner->id)->delete();
        }

        if (in_array('Pathology', $removedTypes)) {
            PartnerPathologyContactModel::where('currently_loggedin_partner_id', $partner->id)->delete();
            PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partner->id)->delete();
            PartnerAllPathologyTestModel::where('currently_loggedin_partner_id', $partner->id)->delete();
        }

        // Handle addition of new registration types
        $addedTypes = array_diff($newRegistrationTypes, $oldRegistrationTypes);

        // Add null records for newly added types
        foreach ($addedTypes as $type) {
            if ($type == 'OPD') {
                PartnerOPDContactModel::create([
                    'currently_loggedin_partner_id' => $partner->id,
                    'clinic_registration_type' => 'OPD',
                    'clinic_contact_person_name' => 'Doctorwala Name',
                    'clinic_name' => 'Doctorwala Clinic',
                    'clinic_gstin' => 'Doctorwala GSTIN',
                    'clinic_mobile_number' => '1234567890',
                    'clinic_email' => 'doctorwala@example.com',
                    'clinic_landmark' => 'DoctorWala Landmark',
                    'clinic_pincode' => '123456',
                    'clinic_state' => 'State',
                    'clinic_city' => 'City',
                    'clinic_google_map_link' => 'https://www.google.com/maps',
                    'clinic_address' => 'Address',
                ]);
            }

            if ($type == 'Pathology') {
                PartnerPathologyContactModel::create([
                    'currently_loggedin_partner_id' => $partner->id,
                    'clinic_registration_type' => 'Pathology',
                    'clinic_contact_person_name' => 'Doctorwala Name',
                    'clinic_name' => 'Doctorwala Clinic',
                    'clinic_gstin' => 'Doctorwala GSTIN',
                    'clinic_mobile_number' => '1234567890',
                    'clinic_email' => 'doctorwala@example.com',
                    'clinic_landmark' => 'DoctorWala Landmark',
                    'clinic_pincode' => '123456',
                    'clinic_state' => 'State',
                    'clinic_city' => 'City',
                    'clinic_google_map_link' => 'https://www.google.com/maps',
                    'clinic_address' => 'Address',
                ]);
            }

            // Repeat the same for other registration types as needed (like Doctor)
        }

        // Update partner details
        $partner->partner_clinic_name = $validated['partner_clinic_name'];
        $partner->partner_contact_person_name = $validated['partner_contact_person_name'];
        $partner->clinic_name = $validated['clinic_name'];
        $partner->partner_mobile_number = $validated['partner_mobile_number'];
        $partner->partner_email = $validated['partner_email'];
        $partner->partner_state = $validated['partner_state'];
        $partner->partner_city = $validated['partner_city'];
        $partner->partner_pincode = $validated['partner_pincode'];
        $partner->partner_landmark = $validated['partner_landmark'];
        $partner->partner_address = $validated['partner_address'];
        $partner->registration_type = json_encode($newRegistrationTypes);

        // Save changes
        $partner->save();

        // Redirect back with success message
        return redirect()->route('superadmin.super-all-partner.get')
            ->with('success', 'Partner details updated successfully!');
    }








    public function allPartnersShow(Request $request)
    {
        $partners = DwPartnerModel::orderBy('created_at', 'desc');


        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $partners->where(function ($query) use ($search) {
                $query->where('partner_clinic_name', 'like', "%{$search}%")
                    ->orWhere('partner_contact_person_name', 'like', "%{$search}%")
                    ->orWhere('partner_email', 'like', "%{$search}%")
                    ->orWhere('partner_mobile_number', 'like', "%{$search}%")
                    ->orWhere('partner_state', 'like', "%{$search}%")
                    ->orWhere('partner_city', 'like', "%{$search}%")
                    ->orWhere('partner_id', 'like', "%{$search}%")
                    ->orWhere('registration_type', 'like', "%{$search}%");
            });
        }


        $partners = $partners->paginate(5);

        foreach ($partners as $partner) {
            $partner->registration_type = is_string($partner->registration_type)
                ? json_decode($partner->registration_type, true) // For JSON string
                : (is_null($partner->registration_type) ? [] : $partner->registration_type); // Default empty array
        }

        return view('superadmin.super-all-partner', compact('partners'));
    }









    public function statusEdit(Request $request, $id)
    {

        $validated = $request->validate([
            'status' => 'string|nullable',
        ]);

        $partner = DwPartnerModel::find($id);

        if (!$partner) {
            return back()->withErrors(['error' => 'Partner not found']);
        }

        if ($request->has('status')) {
            $partner->status = $request->status;
        }

        $partner->save();

        return back()->with('success', 'Updated successfully!');
    }



    public function deletePartner($id)
    {
        $partnerInfo = DwPartnerModel::find($id);

        $partnerInfo->delete();

        return back()->with('success', 'deleted successfully!');
    }
}
