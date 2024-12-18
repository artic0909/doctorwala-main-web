<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PartnerAboutDetailsModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use App\Models\PartnerPatientInquiry;
use Illuminate\Support\Facades\Auth;

class PartnerPatientInquiryController extends Controller
{
    public function create()
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


        $patientInquiries = PartnerPatientInquiry::where('currently_loggedin_partner_id', $partnerId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('partnerpanel.partner-inquiry-from-patients', compact('opdBanner', 'pathologyBanner', 'doctorBanner', 'aboutDetails', 'registrationTypes', 'patientInquiries'));
    }


    public function delete($id)
    {
        $patientInquiry = PartnerPatientInquiry::find($id);
        $patientInquiry->delete();
        return redirect()->back()->with('success', 'Patient Inquiry deleted successfully');
    }
}
