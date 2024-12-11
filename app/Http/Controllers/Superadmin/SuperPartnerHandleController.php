<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\DwPartnerModel;
use Illuminate\Http\Request;

class SuperPartnerHandleController extends Controller
{
    public function addPartnerView()
    {

        return view('superadmin.super-add-partners');
    }




    public function addPartners(Request $request)
    {

        $validated = $request->validate([
            'partner_clinic_name' => 'required|string|max:255',
            'partner_contact_person_name' => 'required|string|max:255',
            'partner_mobile_number' => 'required|string|max:15',
            'partner_email' => 'required|string|email|max:255',
            'partner_state' => 'required|string',
            'partner_city' => 'required|string',
            'partner_pincode' => 'required|string',
            'partner_landmark' => 'required|string',
            'partner_address' => 'required|string',
            'partner_password' => 'required|string',
            'registration_type' => 'required|array',
            'registration_type.*' => 'string',
        ]);


        $partnerCount = DwPartnerModel::count();
        $partnerId = 'DWPTR' . ($partnerCount + 1);

        $dwuser = new DwPartnerModel($validated);
        $dwuser->partner_id = $partnerId;
        $dwuser->partner_password = bcrypt($request->partner_password);
        $dwuser->registration_type = json_encode($request->registration_type);

        $dwuser->save();

        return redirect()->route('superadmin.super-all-partner.get')->with('success', 'Registration successful! Please log in.');
    }




    public function allPartnersShow(Request $request)
    {
        $partners = DwPartnerModel::orderBy('created_at', 'desc');


        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $partners->where(function ($query) use ($search) {
                $query->where('partner_clinic_name', 'like', "%{$search}%")
                    ->orWhere('partner_contact_person_name', 'like', "%{$search}%")
                    ->orWhere('partner_email', 'like', "%{$search}%")
                    ->orWhere('partner_mobile_number', 'like', "%{$search}%")
                    ->orWhere('partner_state', 'like', "%{$search}%")
                    ->orWhere('partner_city', 'like', "%{$search}%")
                    ->orWhere('registration_type', 'like', "%{$search}%");
            });
        }


        $partners = $partners->paginate(8);

        return view('superadmin.super-all-partner', compact('partners'));
    }





    public function statusEdit(Request $request, $id)
    {

        $validated = $request->validate([
            'status' => 'string|nullable',
        ]);

        $partner = DwPartnerModel::find($id);

        if (!$partner) {
            return back()->withErrors(['error' => 'Partner not found']);
        }

        if ($request->has('status')) {
            $partner->status = $request->status;
        }

        $partner->save();

        return back()->with('success', 'Updated successfully!');
    }



    public function deletePartner($id)
    {
        $partnerInfo = DwPartnerModel::find($id);

        $partnerInfo->delete();

        return back()->with('success', 'deleted successfully!');
    }
}
