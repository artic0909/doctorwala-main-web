<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\SuperAboutusModel;
use Illuminate\Support\Facades\Auth;

class FrontPrivacyPolicyPageController extends Controller
{


    protected $guard = 'dwuser';


    public function index()
    {

        $aboutDetails = SuperAboutusModel::get();
        $user = Auth::guard('dwuser')->user();

        return view('privacy-policy', compact('aboutDetails', 'user'));
    }
}
