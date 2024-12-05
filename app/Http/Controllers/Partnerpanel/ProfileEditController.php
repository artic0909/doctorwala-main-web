<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\DwPartnerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileEditController extends Controller
{
    protected $guard = 'partner';

   



    public function partnerProfileEditWithCurrentPartnerDetails()
    {
        $partner = Auth::guard('partner')->user(); 
        return view('partnerpanel.partner-profile', compact('partner'));  
    }

   





    public function updateProfile(Request $request)
    {
        
        $request->validate([
            'partner_clinic_name' => 'required|string|max:255',
            'partner_contact_person_name' => 'required|string|max:255',
            'partner_mobile_number' => 'required|string|max:15',
            'partner_email' => 'required|email|max:255',
            'partner_state' => 'required|string|max:255',
            'partner_city' => 'required|string|max:255',
        ]);

      
        $partnerId = Auth::guard('partner')->id();

        
        DB::table('dw_partner_models')
            ->where('id', $partnerId)
            ->update([
                'partner_clinic_name' => $request->partner_clinic_name,
                'partner_contact_person_name' => $request->partner_contact_person_name,
                'partner_mobile_number' => $request->partner_mobile_number,
                'partner_email' => $request->partner_email,
                'partner_state' => $request->partner_state,
                'partner_city' => $request->partner_city,
            ]);

        
        return back()->with('message', 'Profile updated successfully!');
    }




 


    
    public function updatePassword(Request $request)
    {
        
        $request->validate([
            'partner_password' => 'required|string|min:8',  
        ]);

        
        $partnerId = Auth::guard('partner')->id();

        if (!$partnerId) {
            return back()->withErrors(['message' => 'Partner not found or not logged in']);
        }

        
        $newPassword = Hash::make($request->partner_password);

     
     
        $updateResult = DB::table('dw_partner_models')
            ->where('id', $partnerId)
            ->update([
                'partner_password' => $newPassword,
            ]);

        if ($updateResult) {
            return back()->with('message', 'Password updated successfully!');
        } else {
            return back()->withErrors(['message' => 'Error updating password. Please try again.']);
        }
    }
}
