<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PartnerDoctorContactModel;
use App\Models\SuperAboutusModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAllDoctorHandleController extends Controller
{
    protected $guard = 'dwuser';
    public function index(){

        $aboutDetails = SuperAboutusModel::get();
        $user = Auth::guard('dwuser')->user();

        $docs = PartnerDoctorContactModel::with('banner')->get();

        return view('doctor', compact('aboutDetails', 'user', 'docs'));
    }
}
