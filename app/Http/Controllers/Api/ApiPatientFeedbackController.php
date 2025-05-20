<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PartnerFeedback;
use Illuminate\Http\Request;

class ApiPatientFeedbackController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'currently_loggedin_partner_id' => 'required',
            'clinic_type' => 'required|string',
            'clinic_name' => 'required|string',
            'user_name' => 'required|string',
            'user_email' => 'required|email',
            'rating' => 'required',
            'feedback' => 'required|string',
        ]);

        PartnerFeedback::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Thanks for your valuable feedback',
        ]);
    }
}
