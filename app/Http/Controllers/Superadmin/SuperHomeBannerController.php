<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\SuperHomeBannerModel;
use Illuminate\Http\Request;

class SuperHomeBannerController extends Controller
{
    public function index()
    {
        $banners = SuperHomeBannerModel::all();
        return view('superadmin.super-home-banner', compact('banners'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);

        $filePath = null;

        if ($request->hasFile('banner_image')) {
            try {
                $file = $request->file('banner_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/homebanner', $fileName, 'public');
            } catch (\Exception $e) {
                return back()->withErrors(['banner_image' => 'File upload failed. Please try again.']);
            }
        }

        SuperHomeBannerModel::create([
            'banner_image' => $filePath,
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'title' => 'string|nullable',
            'desc' => 'string|nullable',
        ]);

        $homeBannerInfo = SuperHomeBannerModel::find($id);

        if ($homeBannerInfo) {
            if ($request->hasFile('banner_image')) {
                
                if (file_exists(public_path('storage/' . $homeBannerInfo->banner_image))) {
                    unlink(public_path('storage/' . $homeBannerInfo->banner_image));
                }

               
                $file = $request->file('banner_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/homebanner', $fileName, 'public');
                $homeBannerInfo->banner_image = $filePath;
            }

            $homeBannerInfo->title = $request->input('title');
            $homeBannerInfo->desc = $request->input('desc');
            $homeBannerInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }


    public function delete($id)
    {
        $homeBannerInfo = SuperHomeBannerModel::find($id);

        if ($homeBannerInfo) {

            if (file_exists(public_path('storage/' . $homeBannerInfo->banner_image))) {
                unlink(public_path('storage/' . $homeBannerInfo->banner_image));
            }


            $homeBannerInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
