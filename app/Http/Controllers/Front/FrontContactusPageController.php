<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\FrontContactModel;
use Illuminate\Http\Request;
use App\Models\SuperAboutusModel;
use App\Models\SuperOtherBannerModel;
use Illuminate\Support\Facades\Auth;

class FrontContactusPageController extends Controller
{

    protected $guard = 'dwuser';
    public function index()
    {

        $aboutDetails = SuperAboutusModel::get();
        $otherBanners = SuperOtherBannerModel::get();
        $user = Auth::guard('dwuser')->user();

        return view('contact', compact('aboutDetails', 'otherBanners', 'user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        try {
            FrontContactModel::create($validated);
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send your message. Please try again.');
        }
    }
}
