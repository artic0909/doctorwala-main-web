<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\PartnerInquiryModel;
use Illuminate\Http\Request;

class SuperTicketController extends Controller
{


    public function index(Request $request)
    {

        $searchQuery = $request->input('search');


        $tickets = PartnerInquiryModel::when($searchQuery, function ($query, $searchQuery) {
            $query->where('ticket_id', 'LIKE', "%{$searchQuery}%")
                ->orWhere('partner_clinic_name', 'LIKE', "%{$searchQuery}%")
                ->orWhere('partner_contact_person_name', 'LIKE', "%{$searchQuery}%")
                ->orWhere('partner_mobile_number', 'LIKE', "%{$searchQuery}%")
                ->orWhere('partner_email', 'LIKE', "%{$searchQuery}%")
                ->orWhere('partner_state', 'LIKE', "%{$searchQuery}%")
                ->orWhere('partner_city', 'LIKE', "%{$searchQuery}%");
        })
            ->orderBy('id', 'desc')
            ->paginate(6);

        $tickets->appends(['search' => $searchQuery]);

        return view('superadmin.super-all-tickets', compact('tickets', 'searchQuery'));
    }



    public function addReply(Request $request, $id)
    {
        $validated = $request->validate([
            'partner_problem_reply' => 'required|string',
        ]);


        $partnerInquiry = PartnerInquiryModel::find($id);

        if (!$partnerInquiry) {
            return redirect()->back()->with('error', 'Record not found.');
        }

        $partnerInquiry->partner_problem_reply = $request->input('partner_problem_reply');
        $partnerInquiry->save();

        return redirect('/superadmin/super-ticket-replies')->with('success', 'Updated Successfully!');
    }






    public function delete($id)
    {
        $partnerINQInfo = PartnerInquiryModel::find($id);

        if ($partnerINQInfo) {

            $partnerINQInfo->delete();

            return back()->with('success', 'deleted successfully!');
        }
    }











    // For all replies ----------------------------------------------------------->
    public function showAllReplayed(Request $request)
    {

        $repliedTickets = PartnerInquiryModel::whereNotNull('partner_problem_reply')
            ->where('partner_problem_reply', '!=', '')
            ->orderBy('updated_at', 'desc')
            ->paginate(8);

        return view('superadmin.super-ticket-replies', compact('repliedTickets'));
    }
}
