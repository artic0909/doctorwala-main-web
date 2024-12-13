<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\PartnerDoctorContactModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerDoctorContactController extends Controller
{
    protected $guard = 'partner';

    /**
     * Display the partner's doctor contact details.
     */
    public function index()
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


        $registrationTypess = $partner->registration_type; // Automatically casted as an array if set in the model
        $contactDetails = PartnerDoctorContactModel::where('currently_loggedin_partner_id', $partnerId)->first();

        return view('partnerpanel.partner-doctors', compact('opdBanner', 'pathologyBanner','doctorBanner', 'contactDetails', 'registrationTypes' ,'registrationTypess'));
    }

    /**
     * Store or update the doctor's contact details.
     */
    public function store(Request $request)
    {
        $partnerId = Auth::guard('partner')->id();

        // Validate input data
        $validatedData = $request->validate([
            'clinic_registration_type' => 'required|string',
            'partner_doctor_name' => 'required|string',
            'partner_doctor_specialist' => 'required|string',
            'partner_doctor_designation' => 'required|string',
            'partner_doctor_fees' => 'required|string',
            'partner_doctor_mobile' => 'required|string|max:15',
            'partner_doctor_email' => 'required|email',
            'partner_doctor_landmark' => 'required|string',
            'partner_doctor_pincode' => 'required|string|max:10',
            'partner_doctor_google_map_link' => 'nullable|url',
            'partner_doctor_state' => 'required|string',
            'partner_doctor_city' => 'required|string',
            'partner_doctor_address' => 'required|string',
            'partner_doctor_visit_day.*' => 'required|string',
            'partner_doctor_visit_start_time.*' => 'required|date_format:H:i',
            'partner_doctor_visit_end_time.*' => 'required|date_format:H:i|after:partner_doctor_visit_start_time.*',
        ]);

        // Process visit days and times
        $visitDayTime = [];
        foreach ($request->partner_doctor_visit_day as $index => $day) {
            $visitDayTime[] = [
                'day' => $day,
                'start_time' => $request->partner_doctor_visit_start_time[$index],
                'end_time' => $request->partner_doctor_visit_end_time[$index],
            ];
        }

        $validatedData['visit_day_time'] = $visitDayTime;
        $validatedData['currently_loggedin_partner_id'] = $partnerId;

        // Check if contact details already exist, update if so; otherwise, create
        PartnerDoctorContactModel::updateOrCreate(
            ['currently_loggedin_partner_id' => $partnerId],
            $validatedData
        );

        session()->flash('data_added', true);

        return redirect()->back()->with('success', 'Doctor contact saved successfully!');
    }
}
