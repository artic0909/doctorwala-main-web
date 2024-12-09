<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\PartnerAllPathologyInfoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerAllPathologyInfoController extends Controller
{
    protected $guard = 'partner';



    public function index()
    {
        $partner = Auth::guard('partner')->user();
        $registrationTypes = json_decode($partner->registration_type, true);

        return view('partnerpanel.partner-pathology', compact('registrationTypes'));
    }


    public function indexShow()
    {
        $partner = Auth::guard('partner')->user();

        $partner = Auth::guard('partner')->user();
        $registrationTypes = json_decode($partner->registration_type, true);
    
        // Fetch pathology info for the logged-in partner
        $pathologyInfo = PartnerAllPathologyInfoModel::where('currently_loggedin_partner_id', $partner->id)
            ->get()
            ->map(function ($item) {
                // Decode pathologytests JSON into an array for each record
                $item->pathologytests = json_decode($item->pathologytests, true);
                return $item;
            });
    
        return view('partnerpanel.partner-pathology-show', compact('pathologyInfo', 'registrationTypes'));
    }
    




    public function store(Request $request)
    {
        $request->validate([
            'test_name' => 'required|string|max:255',
            'test_type' => 'required|string',
            'test_price' => 'required|numeric',
            'test_day' => 'required|array',
            'test_day.*' => 'required|string',
            'test_start_time' => 'required|array',
            'test_start_time.*' => 'required|date_format:H:i',
            'test_end_time' => 'required|array',
            'test_end_time.*' => 'required|date_format:H:i',
        ]);

        // Group the day, start time, and end time into the schedule array
        $schedules = [];
        $visitDays = $request->test_day;
        $visitStartTimes = $request->test_start_time;
        $visitEndTimes = $request->test_end_time;

        for ($i = 0; $i < count($visitDays); $i++) {
            $schedules[] = [
                'visit_day' => $visitDays[$i],
                'visit_start_time' => $visitStartTimes[$i],
                'visit_end_time' => $visitEndTimes[$i],
            ];
        }

        // Build the doctor object with the nested schedule array
        $tests = [
            'name' => $request->test_name,
            'type' => $request->test_type,
            'price' => $request->test_price,
            'schedule' => $schedules,
        ];

        // Save the doctor details to the database
        $pathologyInfo = new PartnerAllPathologyInfoModel();
        $pathologyInfo->currently_loggedin_partner_id = auth($this->guard)->id();
        $pathologyInfo->pathologytests = json_encode([$tests]);
        $pathologyInfo->status = 'Available';
        $pathologyInfo->save();

        return redirect()->back()->with('success', 'Pathology details added successfully!');
    }
}
