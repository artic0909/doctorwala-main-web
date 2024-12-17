<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PartnerAllOPDDoctorModel;
use App\Models\PartnerOPDContactModel;
use App\Models\SuperAboutusModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAllOPDHandleController extends Controller
{

    protected $guard = 'dwuser';
    public function index()
    {

        $aboutDetails = SuperAboutusModel::get();
        $user = Auth::guard('dwuser')->user();

        $opds = PartnerOPDContactModel::with('banner')->get();

        return view('opd', compact('aboutDetails', 'user', 'opds'));
    }



    public function singleOPDView($id)
    {
        $aboutDetails = SuperAboutusModel::get();
        $user = Auth::guard('dwuser')->user();






        $opd = PartnerOPDContactModel::with('banner')->find($id);
        if (!$opd) {
            return redirect()->back()->with('error', 'OPD record not found');
        }


        // now take all details from PartnerAllOPDDoctorModel's table where PartnerOPDContactModel's currently_loggedin_partner_id same as PartnerAllOPDDoctorModel's currently_loggedin_partner_id data

        $partnerId = $opd->currently_loggedin_partner_id;

        
        $doctors = PartnerAllOPDDoctorModel::where('currently_loggedin_partner_id', $partnerId)->get();


        foreach ($doctors as $doctor) {
            $doctor->visit_day_time = json_decode($doctor->visit_day_time, true);
        }

        
        return view('all-opd-doctor-pathology-details', compact('aboutDetails', 'user', 'opd', 'doctors'));
    }
}
