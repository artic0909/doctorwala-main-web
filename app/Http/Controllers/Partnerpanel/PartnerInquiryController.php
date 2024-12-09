<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DwPartnerModel;
use App\Models\PartnerInquiryModel;
use Illuminate\Support\Facades\Auth;

class PartnerInquiryController extends Controller
{
    protected $guard = 'partner';

    // Display list of inquiries
    public function index()
    {
        $partner = Auth::guard('partner')->user();
        $registrationTypes = json_decode($partner->registration_type, true);

        $inquiries = PartnerInquiryModel::where('currently_loggedin_partner_id', Auth::id())->get();
        return view('partnerpanel.partner-show-ticket', compact('inquiries', 'registrationTypes'));
    }

    // Show form to create a new inquiry
    public function create()
    {
        $partner = Auth::guard('partner')->user();
        $registrationTypes = json_decode($partner->registration_type, true);
        $partner = DwPartnerModel::find(Auth::id());

        if (!$partner) {
            return redirect()->route('partnerpanel.dashboard')->with('error', 'Partner not found!');
        }

        return view('partnerpanel.partner-get-ticket', compact('partner', 'registrationTypes'));
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


