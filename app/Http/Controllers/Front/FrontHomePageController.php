<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerPathologyContactModel;
use App\Models\SuperAboutusModel;
use App\Models\SuperHomeBannerModel;

class FrontHomePageController extends Controller
{
    public function index(){

        $aboutDetails = SuperAboutusModel::get();
        $homeBanners = SuperHomeBannerModel::get();
    
        $opds = PartnerOPDContactModel::with('banner')->get();
        $paths = PartnerPathologyContactModel::with('pathbanner')->get();
    
        return view('index', compact('aboutDetails', 'homeBanners', 'opds', 'paths')); 

    }
}
