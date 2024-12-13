<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\PartnerAboutDetailsModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerAboutDetailsController extends Controller
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

        return view('partnerpanel.partner-about-clinic', compact('opdBanner', 'pathologyBanner','doctorBanner', 'aboutDetails', 'registrationTypes'));
    }

    public function store(Request $request)
    {
        $partnerId = Auth::guard('partner')->id();

        // Fetch existing data for the partner
        $aboutDetails = PartnerAboutDetailsModel::where('currently_loggedin_partner_id', $partnerId)->first();

        // Validate the incoming data
        $request->validate([
            'about_details' => 'nullable|string',
            'mission_details' => 'nullable|string',
            'vision_details' => 'nullable|string',
        ]);

        // Update only the fields that are submitted, keeping others intact
        $aboutDetails = PartnerAboutDetailsModel::updateOrCreate(
            ['currently_loggedin_partner_id' => $partnerId],
            [
                'about_details' => $request->about_details ?? $aboutDetails->about_details,
                'mission_details' => $request->mission_details ?? $aboutDetails->mission_details,
                'vision_details' => $request->vision_details ?? $aboutDetails->vision_details,
            ]
        );

        return redirect()->route('partner.about.details.create')->with('success', 'Details updated successfully.');
    }
}
