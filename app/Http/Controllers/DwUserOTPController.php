<?php

namespace App\Http\Controllers;


use App\Mail\SendOTPUser;
use App\Models\DwUserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DwUserOTPController extends Controller
{
    // Show OTP form
    public function userLoginWithOTPView()
    {
        return view('user-otp'); // Your Blade file for Enter email entry
    }

    public function userLoginWithOTPVerifyView()
    {
        return view('user-otp-verify'); // Your Blade file for OTP entry
    }


    // Send OTP to the email
    public function sendOTP(Request $request)
    {
        $request->validate([
            'user_email' => 'required|email',
        ]);

        $email = $request->user_email;

        // Check if the email exists in the DwUserModel
        $user = DwUserModel::where('user_email', $email)->first();

        if (!$user) {
            // If email is not found, return error message
            return back()->withErrors(['user_email' => 'Email is not registered.']);
        }

        // Generate OTP
        $otp = rand(1000, 9999);

        // Store OTP in cookie for 3 minutes
        Cookie::queue('user_otp', $otp, 3);

        // Store email in session to use it later
        session(['user_email' => $email]);

        // Send OTP email
        Mail::to($email)->send(new SendOTPUser($otp));

        // Redirect to OTP verification page
        return redirect()->route('user-otp.verify')->with('message', 'OTP has been sent to your email.');
    }


    // Verify OTP
    public function verifyOTP(Request $request)
    {
        $request->validate([
            'user_otp' => 'required|numeric|digits:4',
        ]);

        $enteredOtp = $request->user_otp;

        // Get OTP from the cookie
        $storedOtp = Cookie::get('user_otp');

        // Get email from the session
        $email = session('user_email');

        // Verify OTP
        if ($storedOtp && $enteredOtp == $storedOtp) {
            // OTP is valid, log the user in

            // Retrieve the user data using the stored email
            $user = DwUserModel::where('user_email', $email)->first();

            if ($user) {
                // Log the user in using the user guard
                Auth::guard('dwuser')->login($user);

                // Redirect to the user dashboard
                return redirect()->route('dw.opd');
            } else {
                // user not found, return error
                return back()->withErrors(['user_email' => 'User does not exist.']);
            }
        } else {
            // OTP is invalid or expired
            return back()->withErrors(['user_otp' => 'Invalid or expired OTP.']);
        }
    }
}
