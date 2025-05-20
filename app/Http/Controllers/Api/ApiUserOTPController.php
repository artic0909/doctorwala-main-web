<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\SendOTPUser;
use App\Models\DwUserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

class ApiUserOTPController extends Controller
{
    // Step 1: Send OTP
    public function sendOTP(Request $request)
    {
        $request->validate([
            'user_email' => 'required|email',
        ]);

        $user = DwUserModel::where('user_email', $request->user_email)->first();

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Email not registered.',
            ]);
        }

        $otp = rand(1000, 9999);
        Cache::put('otp_' . $request->user_email, $otp, now()->addMinutes(3));

        Mail::to($request->user_email)->send(new SendOTPUser($otp));

        return response()->json([
            'status' => true,
            'message' => 'OTP sent to email.',
        ]);
    }

    // Step 2: Verify OTP
    public function verifyOTP(Request $request)
    {
        $request->validate([
            'user_email' => 'required|email',
            'otp' => 'required|digits:4',
        ]);

        $storedOtp = Cache::get('otp_' . $request->user_email);

        if ($storedOtp == $request->otp) {
            $user = DwUserModel::where('user_email', $request->user_email)->first();

            if (!$user) {
                return response()->json(['status' => false, 'message' => 'User not found']);
            }

            return response()->json([
                'status' => true,
                'message' => 'OTP verified successfully.',
                'data' => $user,
            ]);
        }

        return response()->json(['status' => false, 'message' => 'Invalid or expired OTP']);
    }
}
