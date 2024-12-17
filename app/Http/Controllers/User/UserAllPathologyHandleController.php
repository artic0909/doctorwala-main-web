<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PartnerPathologyContactModel;
use App\Models\SuperAboutusModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAllPathologyHandleController extends Controller
{
    protected $guard = 'dwuser';
    public function index(){

        $aboutDetails = SuperAboutusModel::get();
        $user = Auth::guard('dwuser')->user();

        $paths = PartnerPathologyContactModel::with('banner')->get();

        return view('pathology', compact('aboutDetails', 'user', 'paths'));
    }
}
