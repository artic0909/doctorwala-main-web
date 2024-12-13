<?php

namespace App\Http\Controllers\Partnerpanel;

use App\Http\Controllers\Controller;
use App\Models\PartnerGalleryModel;
use App\Models\PartnerDoctorBannerModel;
use App\Models\PartnerOPDBannerModel;
use App\Models\PartnerPathologyBannerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerGalleryController extends Controller
{



    // Display gallery images
    public function index()
    {
        $partnerId = Auth::guard('partner')->id();
        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $pathologyBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $doctorBanner = PartnerDoctorBannerModel::where('currently_loggedin_partner_id', $partnerId)->first();
        $gallery = PartnerGalleryModel::where('currently_loggedin_partner_id', $partnerId)->first();

        $partner = Auth::guard('partner')->user();
        $registrationTypes = $partner->registration_type;

        if (is_string($registrationTypes)) {
            $registrationTypes = json_decode($registrationTypes, true);
        }


        $images = $gallery ? $gallery->images : [];
        return view('partnerpanel.partner-gallery', compact('opdBanner', 'pathologyBanner','doctorBanner', 'images', 'registrationTypes'));
    }





    // Add new images (single or multiple)
    public function store(Request $request)
    {
        $partnerId = Auth::guard('partner')->id();

        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $uploadedImages = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('partner-gallery', 'public');
                $uploadedImages[] = $path;
            }
        }

        $gallery = PartnerGalleryModel::firstOrNew(['currently_loggedin_partner_id' => $partnerId]);
        $existingImages = $gallery->images ?: [];
        $gallery->images = array_merge($existingImages, $uploadedImages);
        $gallery->save();

        return redirect()->route('partner.gallery.index')->with('success', 'Images added successfully.');
    }






    // Update an image (replace existing)
    public function update(Request $request, $index)
    {
        $partnerId = Auth::guard('partner')->id();

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = PartnerGalleryModel::where('currently_loggedin_partner_id', $partnerId)->firstOrFail();
        $images = $gallery->images;

        if (isset($images[$index])) {
            // Replace the existing image
            $path = $request->file('image')->store('partner-gallery', 'public');
            $images[$index] = $path;
            $gallery->images = $images;
            $gallery->save();

            return redirect()->route('partner.gallery.index')->with('success', 'Image updated successfully.');
        }

        return redirect()->route('partner.gallery.index')->with('error', 'Image not found.');
    }






    // Delete an image
    public function destroy($index)
    {
        $partnerId = Auth::guard('partner')->id();

        $gallery = PartnerGalleryModel::where('currently_loggedin_partner_id', $partnerId)->firstOrFail();
        $images = $gallery->images;

        if (isset($images[$index])) {
            unset($images[$index]);
            $gallery->images = array_values($images); // Re-index array
            $gallery->save();

            return redirect()->route('partner.gallery.index')->with('success', 'Image deleted successfully.');
        }

        return redirect()->route('partner.gallery.index')->with('error', 'Image not found.');
    }
}
