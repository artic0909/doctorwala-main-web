<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DwPartnerModel;
use App\Models\PartnerPatientInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiPartnerPatientInquiryController extends Controller
{
     public function store(Request $request)
    {
        // Validate incoming JSON data
        $validated = $request->validate([
            'currently_loggedin_partner_id' => 'required',
            'clinic_type' => 'required|string',
            'clinic_name' => 'required|string',
            'user_name' => 'required|string',
            'user_city' => 'required|string',
            'user_mobile' => 'required|string',
            'user_email' => 'required|email',
            'user_inquiry' => 'required|string',
        ]);

        // Create the inquiry
        PartnerPatientInquiry::create($validated);

        // Return success response
        return response()->json([
            'status' => true,
            'message' => 'Inquiry submitted successfully',
        ]);
    }
}
