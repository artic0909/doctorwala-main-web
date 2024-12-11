<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\SuperOtherBannerModel;
use Illuminate\Http\Request;

class SuperOtherBannerController extends Controller
{
    public function index()
    {
        $banners = SuperOtherBannerModel::all();
        return view('superadmin.super-others-banner', compact('banners'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $filePath = null;

        if ($request->hasFile('banner_image')) {
            try {
                $file = $request->file('banner_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/otherbanner', $fileName, 'public');
            } catch (\Exception $e) {
                return back()->withErrors(['banner_image' => 'File upload failed. Please try again.']);
            }
        }

        SuperOtherBannerModel::create([
            'banner_image' => $filePath,
        ]);

        return back()->with('success', 'Added Successfully!');
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $otherBannerInfo = SuperOtherBannerModel::find($id);

        if ($otherBannerInfo) {
            if ($request->hasFile('banner_image')) {

                if (file_exists(public_path('storage/' . $otherBannerInfo->banner_image))) {
                    unlink(public_path('storage/' . $otherBannerInfo->banner_image));
                }


                $file = $request->file('banner_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/otherbanner', $fileName, 'public');
                $otherBannerInfo->banner_image = $filePath;
            }

            $otherBannerInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }


    public function delete($id)
    {
        $otherBannerInfo = SuperOtherBannerModel::find($id);

        if ($otherBannerInfo) {

            if (file_exists(public_path('storage/' . $otherBannerInfo->banner_image))) {
                unlink(public_path('storage/' . $otherBannerInfo->banner_image));
            }


            $otherBannerInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
