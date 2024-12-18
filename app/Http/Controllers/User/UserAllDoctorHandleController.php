<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerDoctorContactModel;
use App\Models\SuperAboutusModel;
use App\Models\PartnerAboutDetailsModel;
use App\Models\PartnerFeedback;
use App\Models\PartnerGalleryModel;
use App\Models\PartnerPatientInquiry;
use App\Models\PartnerServiceListModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAllDoctorHandleController extends Controller
{
    protected $guard = 'dwuser';
    public function index()
    {

        $aboutDetails = SuperAboutusModel::get();
        $user = Auth::guard('dwuser')->user();

        $docs = PartnerDoctorContactModel::with('banner')->get();

        return view('doctor', compact('aboutDetails', 'user', 'docs'));
    }




    public function singleDocView($id)
    {
        $aboutDetails = SuperAboutusModel::get();
        $user = Auth::guard('dwuser')->user();


        $doc = PartnerDoctorContactModel::with('banner')->find($id);
        if (!$doc) {
            return redirect()->back()->with('error', 'Doctor record not found');
        }


        if (is_string($doc->visit_day_time)) {
            $doc->visit_day_time = json_decode($doc->visit_day_time, true);
        }



        // now take all details from PartnerAllOPDDoctorModel's table where PartnerOPDContactModel's currently_loggedin_partner_id same as PartnerAllOPDDoctorModel's currently_loggedin_partner_id data

        $partnerId = $doc->currently_loggedin_partner_id;


        $services = PartnerServiceListModel::where('currently_loggedin_partner_id', $partnerId)->get();
        $photos = PartnerGalleryModel::where('currently_loggedin_partner_id', $partnerId)->get();
        $aboutClinics = PartnerAboutDetailsModel::where('currently_loggedin_partner_id', $partnerId)->get();




        return view('single-doctor-details', compact('aboutDetails', 'user', 'doc', 'services', 'photos', 'aboutClinics'));
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
