<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DwPartnerModel;
use App\Models\PartnerInquiryModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use Illuminate\Support\Facades\Auth;

class PartnerInquiryController extends Controller
{
    protected $guard = 'partner';

    // Display list of inquiries
    public function index()
    {
        $partner = Auth::guard('partner')->user();
        $partnerId = Auth::guard('partner')->id();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $registrationTypes = $partner->registration_type;

        if (is_string($registrationTypes)) {
            $registrationTypes = json_decode($registrationTypes, true);
        }


        $inquiries = PartnerInquiryModel::where('currently_loggedin_partner_id', $partnerId)
        ->orderBy('id', 'desc')
        ->get();
        
        return view('partnerpanel.partner-show-ticket', compact('opdBanner', 'pathologyBanner','doctorBanner', 'inquiries', 'registrationTypes'));
    }

    // Show form to create a new inquiry
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
        $partner = DwPartnerModel::find(Auth::id());

        if (!$partner) {
            return redirect()->route('partnerpanel.dashboard')->with('error', 'Partner not found!');
        }

        return view('partnerpanel.partner-get-ticket', compact('opdBanner', 'pathologyBanner','doctorBanner', 'partner', 'registrationTypes'));
    }

    // Store a new inquiry
    public function store(Request $request)
    {
        $request->validate([
            'partner_problem' => 'required|string',
        ]);

        $partner = DwPartnerModel::find(Auth::id());

        if (!$partner) {
            return redirect()->route('partnerpanel.partner-dashboard')->with('error', 'Partner not found!');
        }

        $ticketId = 'TKTDW' . (PartnerInquiryModel::max('id') + 1);

        PartnerInquiryModel::create([
            'currently_loggedin_partner_id' => $partner->id,
            'partner_clinic_name' => $partner->partner_clinic_name,
            'partner_contact_person_name' => $partner->partner_contact_person_name,
            'partner_mobile_number' => $partner->partner_mobile_number,
            'partner_email' => $partner->partner_email,
            'partner_state' => $partner->partner_state,
            'partner_city' => $partner->partner_city,
            'partner_landmark' => $partner->partner_landmark,
            'partner_pincode' => $partner->partner_pincode,
            'partner_problem' => $request->partner_problem,
            'ticket_id' => $ticketId,
        ]);

        return redirect()->route('partner.inquiries.index')->with('success', 'Inquiry created successfully!');
    }


    // Delete an inquiry
    public function destroy(PartnerInquiryModel $inquiry)
    {
        $inquiry->delete();
        return redirect()->route('partner.inquiries.index')->with('success', 'Inquiry deleted successfully!');
    }
}


