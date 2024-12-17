<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\SuperAboutusModel;
use Illuminate\Http\Request;

class SuperAboutusController extends Controller
{
    public function index()
    {

        $abouts = SuperAboutusModel::get();

        $hasAboutData = SuperAboutusModel::exists();

        return view('superadmin.super-aboutus', compact('abouts', 'hasAboutData'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'about_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'ab_title' => 'nullable|string',
            'ab_b_txt' => 'nullable|string',
            'ab_desc' => 'nullable|string',
            'ab_mission' => 'nullable|string',
            'ab_vision' => 'nullable|string',
            'number' => 'nullable|string',
            'email' => 'nullable|string',
        ]);

        $filePath = null;

        if ($request->hasFile('about_image')) {
            try {
                $file = $request->file('about_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/about-image', $fileName, 'public');
            } catch (\Exception $e) {
                return back()->withErrors(['about_image' => 'File upload failed. Please try again.']);
            }
        }

        SuperAboutusModel::create([
            'about_image' => $filePath,
            'ab_title' => $request->input('ab_title'),
            'ab_b_txt' => $request->input('ab_b_txt'),
            'ab_desc' => $request->input('ab_desc'),
            'ab_mission' => $request->input('ab_mission'),
            'ab_vision' => $request->input('ab_vision'),
            'number' => $request->input('number'),
            'email' => $request->input('email'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }


    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'about_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'ab_title' => 'nullable|string',
            'ab_b_txt' => 'nullable|string',
            'ab_desc' => 'nullable|string',
            'ab_mission' => 'nullable|string',
            'ab_vision' => 'nullable|string',
            'number' => 'nullable|string',
            'email' => 'nullable|string',
        ]);

        $aboutInfo = SuperAboutusModel::find($id);

        if ($aboutInfo) {
            if ($request->hasFile('about_image')) {

                if (file_exists(public_path('storage/' . $aboutInfo->about_image))) {
                    unlink(public_path('storage/' . $aboutInfo->about_image));
                }


                $file = $request->file('about_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/about-image', $fileName, 'public');
                $aboutInfo->about_image = $filePath;
            }

            $aboutInfo->ab_title = $request->input('ab_title');
            $aboutInfo->ab_b_txt = $request->input('ab_b_txt');
            $aboutInfo->ab_desc = $request->input('ab_desc');
            $aboutInfo->ab_mission = $request->input('ab_mission');
            $aboutInfo->ab_vision = $request->input('ab_vision');
            $aboutInfo->number = $request->input('number');
            $aboutInfo->email = $request->input('email');
            $aboutInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }


    public function delete($id)
    {
        $aboutInfo = SuperAboutusModel::find($id);

        if ($aboutInfo) {

            if (file_exists(public_path('storage/' . $aboutInfo->about_image))) {
                unlink(public_path('storage/' . $aboutInfo->about_image));
            }


            $aboutInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
