<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Auth;
use App\Models\DwUserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;

class DwUserController extends Controller
{
    protected $guard = 'dwuser';





    public function viewUserLogForm()
    {
        // return view('authentication');
        $captcha = $this->generateCaptcha();
        session(['captcha_text' => $captcha]);

        return view('authentication', compact('captcha'));
    }




    private function generateCaptcha()
    {
        $chars = 'ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789';
        $captcha = '';
        for ($i = 0; $i < 6; $i++) {
            $captcha .= $chars[random_int(0, strlen($chars) - 1)];
        }
        return $captcha;
    }








    public function userRegForm(Request $request)
    {
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'user_mobile' => 'required|string|max:255',
            'user_city' => 'required|string|max:255',
            'user_email' => 'required|string|email|max:255',
            'user_password' => 'required|string',
        ]);


        $dwuser = new DwUserModel($validated);
        $dwuser->user_password = bcrypt($request->user_password);

        $dwuser->save();

        return redirect()->route('dw.user-auth')->with('success', 'Registration successful! Please log in.');
    }








    public function userLogin(Request $request)
    {
        // Validate the login credentials
        $validated = $request->validate([
            'user_email' => 'required|email',
            'user_password' => 'required',
        ]);

        // Check if captcha matches the one in session
        if ($request->captcha !== session('captcha_text')) {
            return back()->withErrors(['captcha' => 'Captcha is incorrect.'])->withInput();
        }

        // Prepare credentials array
        $credentials = [
            'user_email' => $request->user_email,
            'password' => $request->user_password, // Must use 'password' key for Auth
        ];

        // Attempt login using the dwuser guard
        if (Auth::guard('dwuser')->attempt($credentials)) {
            // Login successful
            $request->session()->regenerate();
            return redirect()->route('dw.opd')->with('success', 'Login successful! You are now logged in.');
        }

        // Login failed
        return back()->withErrors([
            'user_email' => 'Invalid credentials. Please try again.',
        ]);
    }






    public function userlogout(Request $request)
    {
        Auth::guard('dwuser')->logout();
        // $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
