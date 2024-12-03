<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Auth;
use App\Models\DwPartnerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;

class DwPartnerController extends Controller
{

    protected $guard = 'partner';






    public function viewPartnerRegForm()
    {
        return view('partner-register');
    }












    public function partnerLoginFormView()
    {
        return view('partner-login');
    }












    public function partnerdashboardview()
    {
        return view('partnerpanel.partner-dashboard');
    }













    public function partnerRegForm(Request $request)
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
            'partnerRegisterCaptchaInput' => 'required|string',
        ]);



        $partnerCount = DwPartnerModel::count();
        $partnerId = 'DWPTR' . ($partnerCount + 1);

        $dwuser = new DwPartnerModel($validated);
        $dwuser->partner_id = $partnerId;
        $dwuser->partner_password = bcrypt($request->partner_password);
        $dwuser->registration_type = json_encode($request->registration_type);

        $dwuser->save();

        return redirect()->route('partner-login')->with('success', 'Registration successful! Please log in.');
    }



    public function partnerLogin(Request $request)
    {
        // Validate the login credentials
        $validated = $request->validate([
            'partner_email' => 'required|email',
            'partner_password' => 'required',
        ]);

        // Prepare credentials array
        $credentials = [
            'partner_email' => $request->partner_email,
            'password' => $request->partner_password, // Must use 'password' key for Auth
        ];

        // Attempt login using the partner guard
        if (Auth::guard('partner')->attempt($credentials)) {
            // Login successful
            $request->session()->regenerate();
            return redirect()->route('partnerpanel.partner-dashboard');
        }

        // Login failed
        return back()->withErrors([
            'partner_email' => 'Invalid credentials. Please try again.',
        ]);
    }



    public function partnerlogout(Request $request)
    {
        Auth::guard('partner')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/partner-login');
    }
}
