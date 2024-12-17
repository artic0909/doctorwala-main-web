<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\SuperAboutusModel;
use App\Models\SuperOtherBannerModel;
use Illuminate\Support\Facades\Auth;

class FrontAboutPageController extends Controller
{

    protected $guard = 'dwuser';


    public function index(){

        $aboutDetails = SuperAboutusModel::get();
        $otherBanners = SuperOtherBannerModel::get();

        $user = Auth::guard('dwuser')->user();
    
        return view('about', compact('aboutDetails', 'otherBanners', 'user')); 

    }
}
