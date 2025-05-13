<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\PartnerAllPathologyTestModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerAllPathologyInfoController extends Controller
{
    protected $guard = 'partner';



    public function index()
    {
        $partnerId = Auth::guard('partner')->id();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();

        $allpaths = PartnerAllPathologyTestModel::where('currently_loggedin_partner_id', $partnerId)->count();

        $partner = Auth::guard('partner')->user();
        $registrationTypes = $partner->registration_type;

        if (is_string($registrationTypes)) {
            $registrationTypes = json_decode($registrationTypes, true);
        }


        $registrationTypess = $partner->registration_type; // Automatically casted as an array if set in the model
        $contactDetails = PartnerAllPathologyTestModel::where('currently_loggedin_partner_id', $partnerId)->first();

        return view('partnerpanel.partner-pathology', compact('contactDetails', 'registrationTypes', 'registrationTypess', 'opdBanner', 'pathologyBanner', 'doctorBanner', 'allpaths'));
    }







    public function store(Request $request)
    {
        $partnerId = Auth::guard('partner')->id();

        // Validate the input
        $request->validate([
            'test_name' => 'required|string',
            'test_type' => 'required|string',
            'test_price' => 'required|numeric',
            'test_day' => 'nullable|array',
            'test_day.*' => 'nullable|string|max:255',
            'test_start_time' => 'nullable|array',
            'test_start_time.*' => 'nullable|date_format:H:i',
            'test_end_time' => 'nullable|array',
            'test_end_time.*' => 'nullable|date_format:H:i',
        ]);

        // Prepare visit day and time data
        $testDayTime = [];
        foreach ($request->test_day as $index => $day) {
            $testDayTime[] = [
                'day' => $day,
                'start_time' => $request->test_start_time[$index],
                'end_time' => $request->test_end_time[$index],
            ];
        }

        // Prepare the data to be stored
        $data = [
            'currently_loggedin_partner_id' => $partnerId, // Always store the partner ID
            'test_name' => $request->test_name,
            'test_type' => $request->test_type,
            'test_price' => $request->test_price,
            'test_day_time' => json_encode($testDayTime), // Ensure it's stored as JSON
        ];

        // Store new data for the partner without overwriting existing records
        PartnerAllPathologyTestModel::create($data);

        return redirect()->back()->with('success', 'Pathology test details added successfully!');
    }




    public function showStoredData()
    {

        $partnerId = Auth::guard('partner')->id();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $storedData = PartnerAllPathologyTestModel::where('currently_loggedin_partner_id', $partnerId)->paginate(6);
        $allpaths = PartnerAllPathologyTestModel::where('currently_loggedin_partner_id', $partnerId)->count();
        foreach ($storedData as $data) {
            $data->test_day_time = json_decode($data->test_day_time, true);
        }

        $partner = Auth::guard('partner')->user();
        $registrationTypes = $partner->registration_type;

        if (is_string($registrationTypes)) {
            $registrationTypes = json_decode($registrationTypes, true);
        }


        return view('partnerpanel.partner-pathology-show', compact('opdBanner', 'pathologyBanner','doctorBanner', 'storedData', 'registrationTypes', 'allpaths'));
    }





    public function updateStoredData(Request $request, $id)
    {
        // Get the partner ID from the currently authenticated partner
        $partnerId = Auth::guard('partner')->id();

        // Validate the input
        $request->validate([
            'test_name' => 'string|max:255',
            'test_type' => 'string|max:255',
            'test_price' => 'numeric',
            'test_day' => 'nullable|array',
            'test_day.*' => 'nullable|string|max:255',
            'test_start_time' => 'nullable|array',
            'test_start_time.*' => 'nullable|date_format:H:i',
            'test_end_time' => 'nullable|array',
            'test_end_time.*' => 'nullable|date_format:H:i',
            'status' => 'string|max:255',
        ]);

        // Fetch the specific record for the given $id and $partnerId
        $pathologyTest = PartnerAllPathologyTestModel::where('id', $id)
            ->where('currently_loggedin_partner_id', $partnerId)
            ->first();

        if (!$pathologyTest) {
            return redirect()->back()->with('error', 'Pathology test details not found.');
        }

        // Prepare day and time data
        $testDayTime = [];
        if ($request->has('test_day')) {
            foreach ($request->test_day as $index => $day) {
                $testDayTime[] = [
                    'day' => $day,
                    'start_time' => $request->test_start_time[$index] ?? null,
                    'end_time' => $request->test_end_time[$index] ?? null,
                ];
            }
        }

        // Prepare the data to update
        $data = [
            'test_name' => $request->test_name,
            'test_type' => $request->test_type,
            'test_price' => $request->test_price,
            'status' => $request->status,
            'test_day_time' => json_encode($testDayTime), // Serialize to JSON
        ];

        // Update the record
        $pathologyTest->update($data);

        return redirect()->back()->with('success', 'Pathology test details updated successfully!');
    }






    public function destroy(Request $request, $id)
    {

        $partnerId = Auth::guard('partner')->id();

        $opdDoctor = PartnerAllPathologyTestModel::where('id', $id)
            ->where('currently_loggedin_partner_id', $partnerId)
            ->first();

        if (!$opdDoctor) {
            return redirect()->back()->with('error', 'Pathology test details not found.');
        }


        $opdDoctor->delete();

        return redirect()->back()->with('success', 'Pathology test details deleted successfully!');
    }
}
