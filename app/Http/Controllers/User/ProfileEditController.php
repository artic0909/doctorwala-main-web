<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PartnerAllOPDDoctorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\PartnerDoctorContactModel;
use App\Models\PartnerAllPathologyTestModel;
use App\Models\PartnerFeedback;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerPathologyContactModel;
use App\Models\SuperAboutusModel;
use App\Models\SuperHomeBannerModel;

class ProfileEditController extends Controller
{
    protected $guard = 'dwuser';





    public function userProfileEditWithCurrentUserDetails()
    {

        $specialists = PartnerAllOPDDoctorModel::distinct()->pluck('doctor_specialist');
        $types = PartnerAllPathologyTestModel::distinct()->pluck('test_type');

        $aboutDetails = SuperAboutusModel::get();
        $homeBanners = SuperHomeBannerModel::get();
    
        $opds = PartnerOPDContactModel::with('banner')->get();
        $paths = PartnerPathologyContactModel::with('banner')->get();
        $docs = PartnerDoctorContactModel::with('banner')->get();

        $testi = PartnerFeedback::get();

        $user = Auth::guard('dwuser')->user();
        return view('index', compact('user', 'aboutDetails', 'homeBanners', 'opds', 'paths', 'docs', 'specialists', 'types', 'testi'));
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
