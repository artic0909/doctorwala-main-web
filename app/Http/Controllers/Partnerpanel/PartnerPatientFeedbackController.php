<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\PartnerAboutDetailsModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerFeedback;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use Illuminate\Support\Facades\Auth;

class PartnerPatientFeedbackController extends Controller
{
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


        $aboutDetails = PartnerAboutDetailsModel::where('currently_loggedin_partner_id', $partnerId)->first();


        $patientFeedbacks = PartnerFeedback::where('currently_loggedin_partner_id', $partnerId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('partnerpanel.partner-feedbacks', compact('opdBanner', 'pathologyBanner', 'doctorBanner', 'aboutDetails', 'registrationTypes', 'patientFeedbacks'));
    }

}
