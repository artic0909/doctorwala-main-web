<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PartnerAllOPDDoctorModel;
use App\Models\PartnerAllPathologyTestModel;
use Illuminate\Http\Request;
use App\Models\PartnerDoctorContactModel;
use App\Models\PartnerFeedback;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerPathologyContactModel;
use App\Models\SuperAboutusModel;
use App\Models\SuperHomeBannerModel;
use Illuminate\Support\Facades\Auth;

class FrontHomePageController extends Controller
{

    protected $guard = 'dwuser';
    public function index()
    {

        $aboutDetails = SuperAboutusModel::get();
        $homeBanners = SuperHomeBannerModel::get();

        $specialists = PartnerAllOPDDoctorModel::distinct()->pluck('doctor_specialist');
        $types = PartnerAllPathologyTestModel::distinct()->pluck('test_type');

        $opds = PartnerOPDContactModel::with('banner')->get();
        $paths = PartnerPathologyContactModel::with('banner')->get();
        $docs = PartnerDoctorContactModel::with('banner')->get();

        $testi = PartnerFeedback::get();


        $user = Auth::guard('dwuser')->user();

        return view('index', compact('aboutDetails', 'homeBanners', 'opds', 'paths', 'docs', 'user', 'specialists', 'types', 'testi'));
    }


    // It will search by All OPD & Pathology by thair doctor_specialist & test_type
    public function opdContactFetchBySearchDoctorSpaciality(Request $request)
    {
        $search = $request->get('search');

        $partnerOPDIds = PartnerAllOPDDoctorModel::where('doctor_specialist', 'like', '%' . $search . '%')
            ->pluck('currently_loggedin_partner_id');

        $partnerPathIds = PartnerAllPathologyTestModel::where('test_type', 'like', '%' . $search . '%')
            ->pluck('currently_loggedin_partner_id');

        $OPDresults = PartnerOPDContactModel::whereIn('currently_loggedin_partner_id', $partnerOPDIds)
            ->with('banner')
            ->get();


        $Pathresults = PartnerPathologyContactModel::whereIn('currently_loggedin_partner_id', $partnerPathIds)
            ->with('banner')
            ->get();

        return response()->json([
            'opd_results' => $OPDresults,
            'pathology_results' => $Pathresults,
        ]);
    }




    public function globalSearch(Request $request)
    {
        $searchTerm = $request->get('search');

        // Search in PartnerOPDContactModel
        $opdResults = PartnerOPDContactModel::where('clinic_state', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_city', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_pincode', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_name', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_contact_person_name', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_email', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_landmark', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_address', 'like', "%{$searchTerm}%")
            ->with('banner')
            ->get();

        // Search in PartnerPathologyContactModel
        $pathologyResults = PartnerPathologyContactModel::where('clinic_state', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_city', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_pincode', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_name', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_contact_person_name', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_email', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_landmark', 'like', "%{$searchTerm}%")
            ->orWhere('clinic_address', 'like', "%{$searchTerm}%")
            ->with('banner')
            ->get();

        // Search in PartnerDoctorContactModel
        $doctorResults = PartnerDoctorContactModel::where('partner_doctor_name', 'like', "%{$searchTerm}%")
            ->orWhere('partner_doctor_specialist', 'like', "%{$searchTerm}%")
            ->orWhere('partner_doctor_designation', 'like', "%{$searchTerm}%")
            ->orWhere('partner_doctor_fees', 'like', "%{$searchTerm}%")
            ->orWhere('partner_doctor_mobile', 'like', "%{$searchTerm}%")
            ->orWhere('partner_doctor_email', 'like', "%{$searchTerm}%")
            ->orWhere('partner_doctor_landmark', 'like', "%{$searchTerm}%")
            ->orWhere('partner_doctor_pincode', 'like', "%{$searchTerm}%")
            ->orWhere('partner_doctor_state', 'like', "%{$searchTerm}%")
            ->orWhere('partner_doctor_city', 'like', "%{$searchTerm}%")
            ->orWhere('partner_doctor_address', 'like', "%{$searchTerm}%")
            ->with('banner')
            ->get();

        // Search in PartnerAllOPDDoctorModel (for matching partner ids)
        $partnerOPDIds = PartnerAllOPDDoctorModel::where('doctor_specialist', 'like', '%' . $searchTerm . '%')
            ->pluck('currently_loggedin_partner_id');

        // Search in PartnerAllPathologyTestModel (for matching partner ids)
        $partnerPathIds = PartnerAllPathologyTestModel::where('test_type', 'like', '%' . $searchTerm . '%')
            ->pluck('currently_loggedin_partner_id');

        // Fetch results from PartnerOPDContactModel using partner IDs
        $OPDresultsByIds = PartnerOPDContactModel::whereIn('currently_loggedin_partner_id', $partnerOPDIds)
            ->with('banner')
            ->get();

        // Fetch results from PartnerPathologyContactModel using partner IDs
        $PathresultsByIds = PartnerPathologyContactModel::whereIn('currently_loggedin_partner_id', $partnerPathIds)
            ->with('banner')
            ->get();

        // Combine all results
        return response()->json([
            'opd_results' => $opdResults,
            'pathology_results' => $pathologyResults,
            'doctor_results' => $doctorResults,
            'opd_results_by_ids' => $OPDresultsByIds,
            'pathology_results_by_ids' => $PathresultsByIds,
        ]);
    }
}
