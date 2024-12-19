<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PartnerPathologyContactModel;
use App\Models\PartnerAllPathologyTestModel;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerAllOPDDoctorModel;
use App\Models\PartnerFeedback;
use App\Models\PartnerGalleryModel;
use App\Models\PartnerPatientInquiry;
use App\Models\PartnerServiceListModel;
use App\Models\SuperAboutusModel;
use App\Models\PartnerAboutDetailsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAllPathologyHandleController extends Controller
{
    protected $guard = 'dwuser';
    public function index()
    {

        $aboutDetails = SuperAboutusModel::get();
        $user = Auth::guard('dwuser')->user();

        $paths = PartnerPathologyContactModel::with('banner')
            ->where('status', 'active')
            ->paginate(6);

        return view('pathology', compact('aboutDetails', 'user', 'paths'));
    }



    public function singlePathView($id)
    {
        $aboutDetails = SuperAboutusModel::get();
        $user = Auth::guard('dwuser')->user();






        $path = PartnerPathologyContactModel::with('banner')->find($id);
        if (!$path) {
            return redirect()->back()->with('error', 'Pathology record not found');
        }


        // now take all details from PartnerAllOPDDoctorModel's table where PartnerOPDContactModel's currently_loggedin_partner_id same as PartnerAllOPDDoctorModel's currently_loggedin_partner_id data

        $partnerId = $path->currently_loggedin_partner_id;



        $tests = PartnerAllPathologyTestModel::where('currently_loggedin_partner_id', $partnerId)->get();


        $services = PartnerServiceListModel::where('currently_loggedin_partner_id', $partnerId)->get();
        $photos = PartnerGalleryModel::where('currently_loggedin_partner_id', $partnerId)->get();
        $aboutClinics = PartnerAboutDetailsModel::where('currently_loggedin_partner_id', $partnerId)->get();



        foreach ($tests as $test) {
            $test->test_day_time = json_decode($test->test_day_time, true);
        }


        return view('single-path-details', compact('aboutDetails', 'user', 'path', 'tests', 'services', 'photos', 'aboutClinics'));
    }




    public function patientInquiry(Request $request)
    {
        $validated = $request->validate([
            'currently_loggedin_partner_id' => 'required|string',
            'clinic_type' => 'required|string',
            'clinic_name' => 'required|string',
            'user_name' => 'required|string',
            'user_mobile' => 'required|string',
            'user_email' => 'required|string',
            'user_inquiry' => 'required|string',
        ]);

        try {
            PartnerPatientInquiry::create($validated);
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send your message. Please try again.');
        }
    }

    public function saveRating(Request $request)
    {

        $validated = $request->validate([
            'currently_loggedin_partner_id' => 'required|string',
            'clinic_type' => 'required|string',
            'clinic_name' => 'required|string',
            'user_name' => 'required|string',
            'user_email' => 'required|string',
            'rating' => 'required|string',
            'feedback' => 'required|string',
        ]);

        try {
            PartnerFeedback::create($validated);
            return back()->with('successFeed', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return back()->with('errorFeed', 'Failed to send your message. Please try again.');
        }
        return response()->json(['message' => 'Rating saved successfully']);
    }
}
