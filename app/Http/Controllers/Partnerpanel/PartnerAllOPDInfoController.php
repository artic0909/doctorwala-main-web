<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\PartnerAllOPDDoctorModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerAllOPDInfoController extends Controller
{
    protected $guard = 'partner';



    public function index()
    {
        $partnerId = Auth::guard('partner')->id();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();

        // all opds counting
        $allOPDs = PartnerAllOPDDoctorModel::where('currently_loggedin_partner_id', $partnerId)->count();

        $partner = Auth::guard('partner')->user();
        $registrationTypes = $partner->registration_type;

        if (is_string($registrationTypes)) {
            $registrationTypes = json_decode($registrationTypes, true);
        }

        $registrationTypess = $partner->registration_type; // Automatically casted as an array if set in the model
        $contactDetails = PartnerAllOPDDoctorModel::where('currently_loggedin_partner_id', $partnerId)->first();

        return view('partnerpanel.partner-opd', compact('opdBanner', 'pathologyBanner','doctorBanner', 'contactDetails', 'registrationTypes', 'registrationTypess', 'allOPDs'));
    }







    public function store(Request $request)
    {
        $partnerId = Auth::guard('partner')->id();

        // Validate the input
        $request->validate([
            'doctor_name' => 'required|string|max:255',
            'doctor_designation' => 'required|string|max:255',
            'doctor_specialist' => 'required|string|max:255',
            'doctor_fees' => 'required|numeric',
            'doctor_more' => 'nullable|string',
            'doctor_visit_day' => 'nullable|array',
            'doctor_visit_day.*' => 'nullable|string|max:255',
            'doctor_visit_start_time' => 'nullable|array',
            'doctor_visit_start_time.*' => 'nullable|date_format:H:i',
            'doctor_visit_end_time' => 'nullable|array',
            'doctor_visit_end_time.*' => 'nullable|date_format:H:i',
        ]);

        // Prepare visit day and time data
        $visitDayTime = [];
        foreach ($request->doctor_visit_day as $index => $day) {
            $visitDayTime[] = [
                'day' => $day,
                'start_time' => $request->doctor_visit_start_time[$index],
                'end_time' => $request->doctor_visit_end_time[$index],
            ];
        }

        // Prepare the data to be stored
        $data = [
            'currently_loggedin_partner_id' => $partnerId, // Always store the partner ID
            'doctor_name' => $request->doctor_name,
            'doctor_designation' => $request->doctor_designation,
            'doctor_specialist' => $request->doctor_specialist,
            'doctor_fees' => $request->doctor_fees,
            'doctor_more' => $request->doctor_more,
            'visit_day_time' => json_encode($visitDayTime), // Ensure it's stored as JSON
        ];

        // Store new data for the partner without overwriting existing records
        PartnerAllOPDDoctorModel::create($data);

        return redirect()->back()->with('success', 'OPD Doctor details added successfully!');
    }




    public function showStoredData()
    {

        $partnerId = Auth::guard('partner')->id();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $storedData = PartnerAllOPDDoctorModel::where('currently_loggedin_partner_id', $partnerId)->paginate(6);
        foreach ($storedData as $data) {
            $data->visit_day_time = json_decode($data->visit_day_time, true);
        }

        $partner = Auth::guard('partner')->user();
        $registrationTypes = $partner->registration_type;

        if (is_string($registrationTypes)) {
            $registrationTypes = json_decode($registrationTypes, true);
        }


        return view('partnerpanel.partner-opd-show', compact('opdBanner', 'pathologyBanner','doctorBanner', 'storedData', 'registrationTypes'));
    }





    public function updateStoredData(Request $request, $id)
    {
        // Get the partner ID from the currently authenticated partner
        $partnerId = Auth::guard('partner')->id();

        // Validate the input
        $request->validate([
            'doctor_name' => 'string|max:255',
            'doctor_designation' => 'string|max:255',
            'doctor_specialist' => 'string|max:255',
            'doctor_fees' => 'numeric',
            'doctor_more' => 'string',
            'doctor_visit_day' => 'nullable|array',
            'doctor_visit_day.*' => 'nullable|string|max:255',
            'doctor_visit_start_time' => 'nullable|array',
            'doctor_visit_start_time.*' => 'nullable|date_format:H:i',
            'doctor_visit_end_time' => 'nullable|array',
            'doctor_visit_end_time.*' => 'nullable|date_format:H:i',
            'status' => 'string|max:255',
        ]);

        // Fetch the specific record for the given $id and $partnerId
        $opdDoctor = PartnerAllOPDDoctorModel::where('id', $id)
            ->where('currently_loggedin_partner_id', $partnerId)
            ->first();

        if (!$opdDoctor) {
            return redirect()->back()->with('error', 'OPD Doctor details not found.');
        }

        // Prepare visit day and time data
        $visitDayTime = [];
        foreach ($request->doctor_visit_day as $index => $day) {
            $visitDayTime[] = [
                'day' => $day,
                'start_time' => $request->doctor_visit_start_time[$index],
                'end_time' => $request->doctor_visit_end_time[$index],
            ];
        }

        // Prepare the data to update
        $data = [
            'doctor_name' => $request->doctor_name,
            'doctor_designation' => $request->doctor_designation,
            'doctor_specialist' => $request->doctor_specialist,
            'doctor_fees' => $request->doctor_fees,
            'doctor_more' => $request->doctor_more,
            'status' => $request->status,
            'visit_day_time' => json_encode($visitDayTime), // Serialize to JSON
        ];

        // Update the record
        $opdDoctor->update($data);

        return redirect()->back()->with('success', 'OPD Doctor details updated successfully!');
    }



    
    public function destroy(Request $request, $id)
    {
       
        $partnerId = Auth::guard('partner')->id();

        $opdDoctor = PartnerAllOPDDoctorModel::where('id', $id)
            ->where('currently_loggedin_partner_id', $partnerId)
            ->first();

        if (!$opdDoctor) {
            return redirect()->back()->with('error', 'OPD Doctor details not found.');
        }

    
        $opdDoctor->delete();

        return redirect()->back()->with('success', 'OPD Doctor details deleted successfully!');
    }


}
