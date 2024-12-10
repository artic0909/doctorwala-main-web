<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Auth;
use App\Models\DwPartnerModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;

class DwPartnerController extends Controller
{

    protected $guard = 'partner';






    public function viewPartnerRegForm()
    {
        // return view('partner-register');

        $captcha = $this->generateCaptcha();
        session(['captcha_text' => $captcha]);

        return view('partner-register', compact('captcha'));
    }







    public function partnerLoginFormView()
    {
        // return view('partner-login');

        $captcha = $this->generateCaptcha();
        session(['captcha_text' => $captcha]);

        return view('partner-login', compact('captcha'));
    }













    public function partnerdashboardview()
    {
        $partnerId = Auth::guard('partner')->id();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();


        $partner = Auth::guard('partner')->user();
        $registrationTypes = json_decode($partner->registration_type, true); // Decode the JSON


        $clinicName = $partner->partner_clinic_name;
        $partnerName = $partner->partner_contact_person_name;

        return view('partnerpanel.partner-dashboard', compact('opdBanner', 'pathologyBanner','doctorBanner', 'registrationTypes', 'partnerName', 'clinicName'));
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
            'captcha' => 'required|string', // Captcha input field
        ]);

        // Check if captcha matches the one in session
        if ($request->captcha !== session('captcha_text')) {
            return back()->withErrors(['captcha' => 'Captcha is incorrect.'])->withInput();
        }



        $partnerCount = DwPartnerModel::count();
        $partnerId = 'DWPTR' . ($partnerCount + 1);

        $dwuser = new DwPartnerModel($validated);
        $dwuser->partner_id = $partnerId;
        $dwuser->partner_password = bcrypt($request->partner_password);
        $dwuser->registration_type = json_encode($request->registration_type);

        $dwuser->save();

        return redirect()->route('partnerpanel.partner-login')->with('success', 'Registration successful! Please log in.');
    }








    private function generateCaptcha()
    {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $captcha = '';
        for ($i = 0; $i < 6; $i++) {
            $captcha .= $chars[random_int(0, strlen($chars) - 1)];
        }
        return $captcha;
    }









    public function partnerLogin(Request $request)
    {
        // Validate the login credentials
        $validated = $request->validate([
            'partner_email' => 'required|email',
            'partner_password' => 'required',
        ]);


        // Check if captcha matches the one in session
        if ($request->captcha !== session('captcha_text')) {
            return back()->withErrors(['captcha' => 'Captcha is incorrect.'])->withInput();
        }

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
        // $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/partner-login');
    }
}
