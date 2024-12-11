<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\DwPartnerModel;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerAllOPDDoctorModel;
use Illuminate\Http\Request;

class SuperAllOPDHandleController extends Controller
{



    public function opdView(Request $request)
    {
        $opds = PartnerOPDContactModel::orderBy('created_at', 'desc')->get();


        foreach ($opds as $opd) {

            $partner = DwPartnerModel::where('id', $opd->currently_loggedin_partner_id)->first();


            if ($partner) {
                $opd->partner_id = $partner->partner_id;
                $opd->partner_clinic_name = $partner->partner_clinic_name;
            } else {

                $opd->partner_id = null;
                $opd->partner_clinic_name = null;
            }
        }

        return view('superadmin.super-all-opd', compact('opds'));
    }




    public function statusEdit(Request $request, $id)
    {

        $validated = $request->validate([
            'status' => 'string|nullable',
        ]);

        $opd = PartnerOPDContactModel::find($id);

        if (!$opd) {
            return back()->withErrors(['error' => 'OPD Details not found']);
        }

        if ($request->has('status')) {
            $opd->status = $request->status;
        }

        $opd->save();

        return back()->with('success', 'Updated successfully!');
    }





    public function opdEditPageView($id)
    {

        $opd = PartnerOPDContactModel::find($id);

        return view('superadmin.super-edit-opd-details', compact('opd'));
    }




    public function updateOPDContactDetails(Request $request, $id)
    {

        $request->validate([
            'clinic_registration_type' => 'string',
            'clinic_contact_person_name' => 'string|max:255',
            'clinic_gstin' => 'nullable|string',
            'clinic_mobile_number' => 'string|max:15',
            'clinic_email' => 'email|max:255',
            'clinic_landmark' => 'string|max:255',
            'clinic_pincode' => 'numeric|digits:6',
            'clinic_state' => 'string|max:255',
            'clinic_city' => 'string|max:255',
            'clinic_google_map_link' => 'nullable|string|max:500',
            'clinic_address' => 'string',
        ]);


        $contactDetails = PartnerOPDContactModel::find($id);


        if (!$contactDetails) {
            return redirect()->back()->with('error', 'Contact details not found.');
        }


        $contactDetails->update($request->all());

        return redirect()->back()->with('success', 'Contact details updated successfully.');
    }




    public function addOPDDoctorPageView($id)
    {

        $opd = PartnerOPDContactModel::find($id);

        return view('superadmin.super-addopd-doctor', compact('opd'));
    }




    public function addDoctorsOnOPD(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'doctor_name' => 'required|string|max:255',
            'doctor_designation' => 'required|string|max:255',
            'doctor_specialist' => 'required|string|max:255',
            'doctor_fees' => 'required|numeric|min:0',
            'doctor_visit_day' => 'required|array|min:1',
            'doctor_visit_day.*' => 'required|string|max:255',
            'doctor_visit_start_time' => 'required|array|min:1',
            'doctor_visit_start_time.*' => 'required|date_format:H:i',
            'doctor_visit_end_time' => 'required|array|min:1',
            'doctor_visit_end_time.*' => 'required|date_format:H:i|after:doctor_visit_start_time.*',
        ]);

        // Ensure the partner ID exists
        $partnerId = DwPartnerModel::find($id);

        if (!$partnerId) {
            return redirect()->back()->with('error', 'Invalid partner ID.');
        }

        // Prepare visit day and time data
        $visitDayTime = collect($request->doctor_visit_day)->map(function ($day, $index) use ($request) {
            return [
                'day' => $day,
                'start_time' => $request->doctor_visit_start_time[$index] ?? null,
                'end_time' => $request->doctor_visit_end_time[$index] ?? null,
            ];
        });

        // Validate that all start and end times are paired correctly
        foreach ($visitDayTime as $visit) {
            if (empty($visit['start_time']) || empty($visit['end_time'])) {
                return redirect()->back()->with('error', 'Each visit day must have a start and end time.');
            }
        }

        // Prepare the data to be stored
        $data = [
            'currently_loggedin_partner_id' => $partnerId->id, // Retrieve the partner's ID
            'doctor_name' => $request->doctor_name,
            'doctor_designation' => $request->doctor_designation,
            'doctor_specialist' => $request->doctor_specialist,
            'doctor_fees' => $request->doctor_fees,
            'visit_day_time' => $visitDayTime->toJson(), // Encode as JSON
        ];

        // Create a new record for the OPD doctor
        PartnerAllOPDDoctorModel::create($data);

        return redirect()->back()->with('success', 'OPD Doctor details added successfully!');
    }
}
