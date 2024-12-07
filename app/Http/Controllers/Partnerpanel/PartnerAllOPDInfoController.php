<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\PartnerAllOPDInfoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerAllOPDInfoController extends Controller
{
    protected $guard = 'partner';



    public function index()
    {
        $partner = Auth::guard('partner')->user();
        $registrationTypes = json_decode($partner->registration_type, true);

        return view('partnerpanel.partner-opd', compact('registrationTypes'));
    }


    public function indexShow()
    {
        $partner = Auth::guard('partner')->user();
        $registrationTypes = json_decode($partner->registration_type, true);


        $opdInfo = PartnerAllOPDInfoModel::where('currently_loggedin_partner_id', Auth::guard('partner')->id())->get();


        if ($opdInfo) {
            foreach ($opdInfo as $info) {
                $info->doctors = json_decode($info->doctors, true);
            }
        } else {
            $opdInfo = null;
        }

        return view('partnerpanel.partner-opd-show', compact('registrationTypes', 'opdInfo'));
    }




    public function store(Request $request)
    {
        $request->validate([
            'doctor_name' => 'required|string|max:255',
            'doctor_designation' => 'required|string',
            'doctor_specialist' => 'required|string',
            'doctor_fees' => 'required|numeric',
            'doctor_visit_day' => 'required|array',
            'doctor_visit_day.*' => 'required|string',
            'doctor_visit_start_time' => 'required|array',
            'doctor_visit_start_time.*' => 'required|date_format:H:i',
            'doctor_visit_end_time' => 'required|array',
            'doctor_visit_end_time.*' => 'required|date_format:H:i',
        ]);

        // Group the day, start time, and end time into the schedule array
        $schedules = [];
        $visitDays = $request->doctor_visit_day;
        $visitStartTimes = $request->doctor_visit_start_time;
        $visitEndTimes = $request->doctor_visit_end_time;

        for ($i = 0; $i < count($visitDays); $i++) {
            $schedules[] = [
                'visit_day' => $visitDays[$i],
                'visit_start_time' => $visitStartTimes[$i],
                'visit_end_time' => $visitEndTimes[$i],
            ];
        }

        // Build the doctor object with the nested schedule array
        $doctor = [
            'name' => $request->doctor_name,
            'designation' => $request->doctor_designation,
            'specialist' => $request->doctor_specialist,
            'fees' => $request->doctor_fees,
            'schedule' => $schedules,
        ];

        // Save the doctor details to the database
        $opdInfo = new PartnerAllOPDInfoModel();
        $opdInfo->currently_loggedin_partner_id = auth($this->guard)->id();
        $opdInfo->doctors = json_encode([$doctor]);
        $opdInfo->status = 'Available';
        $opdInfo->save();

        return redirect()->back()->with('success', 'Doctor details added successfully!');
    }



 




}
