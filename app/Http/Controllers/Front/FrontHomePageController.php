<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PartnerDoctorContactModel;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerPathologyContactModel;
use App\Models\SuperAboutusModel;
use App\Models\SuperHomeBannerModel;
use Illuminate\Support\Facades\Auth;

class FrontHomePageController extends Controller
{

    protected $guard = 'dwuser';
    public function index(){

        $aboutDetails = SuperAboutusModel::get();
        $homeBanners = SuperHomeBannerModel::get();
    
        $opds = PartnerOPDContactModel::with('banner')->get();
        $paths = PartnerPathologyContactModel::with('banner')->get();
        $docs = PartnerDoctorContactModel::with('banner')->get();
        $user = Auth::guard('dwuser')->user();
    
        return view('index', compact('aboutDetails', 'homeBanners', 'opds', 'paths', 'docs', 'user')); 

    }

}
