<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PartnerOPDContactModel;
use App\Models\SuperAboutusModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAllOPDHandleController extends Controller
{

    protected $guard = 'dwuser';
    public function index(){

        $aboutDetails = SuperAboutusModel::get();
        $user = Auth::guard('dwuser')->user();

        $opds = PartnerOPDContactModel::with('banner')->get();

        return view('opd', compact('aboutDetails', 'user', 'opds'));
    }
}
