<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileEditController extends Controller
{
    protected $guard = 'dwuser';





    public function userProfileEditWithCurrentUserDetails()
    {

        $user = Auth::guard('dwuser')->user();
        return view('index', compact('user'));
    }







    public function updateProfile(Request $request)
    {

        $request->validate([
            'user_name' => 'required|string|max:255',
            'user_mobile' => 'required|string|max:15',
            'user_email' => 'required|email|max:255',
            'user_city' => 'required|string|max:255',
        ]);


        $userId = Auth::guard('dwuser')->id();


        $profileUpdateResult = DB::table('dw_user_models')
            ->where('id', $userId)
            ->update([
                'user_name' => $request->user_name,
                'user_mobile' => $request->user_mobile,
                'user_email' => $request->user_email,
                'user_city' => $request->user_city,
            ]);


        if ($profileUpdateResult) {
            return back()->with('profile_update_status', 'success');
        } else {
            return back()->with('profile_update_status', 'failure');
        }
    }






    public function updatePassword(Request $request)
    {

        $request->validate([
            'user_password' => 'required|string|min:8',
        ]);




        $userId = Auth::guard('dwuser')->id();

        if (!$userId) {
            return back()->withErrors(['message' => 'User not found or not logged in']);
        }


        $newPassword = Hash::make($request->user_password);



        $updateResult = DB::table('dw_user_models')
            ->where('id', $userId)
            ->update([
                'user_password' => $newPassword,
            ]);

        if ($updateResult) {
            return back()->with('password_update_status', 'success');
        } else {
            return back()->with('password_update_status', 'failure');
        }
    }
}