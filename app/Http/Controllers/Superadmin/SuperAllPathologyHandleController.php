<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\DwPartnerModel;
use App\Models\PartnerAllPathologyTestModel;
use App\Models\PartnerPathologyBannerModel;
use App\Models\PartnerPathologyContactModel;
use App\Exports\PathExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class SuperAllPathologyHandleController extends Controller
{



    public function pathView(Request $request)
    {
        $paths = PartnerPathologyContactModel::orderBy('created_at', 'desc')->paginate(4);


        foreach ($paths as $path) {

            $partner = DwPartnerModel::where('id', $path->currently_loggedin_partner_id)->first();


            if ($partner) {
                $path->pid = $partner->id;
                $path->partner_id = $partner->partner_id;
                $path->partner_clinic_name = $partner->partner_clinic_name;
            } else {

                $path->pid = null;
                $path->partner_id = null;
                $path->partner_clinic_name = null;
            }
        }



        return view('superadmin.super-all-pathology', compact('paths'));
    }




    public function statusEdit(Request $request, $id)
    {

        $validated = $request->validate([
            'status' => 'string|nullable',
        ]);

        $path = PartnerPathologyContactModel::find($id);

        if (!$path) {
            return back()->withErrors(['error' => 'OPD Details not found']);
        }

        if ($request->has('status')) {
            $path->status = $request->status;
        }

        $path->save();

        return back()->with('success', 'Updated successfully!');
    }





    public function pathEditPageView($id)
    {

        $path = PartnerPathologyContactModel::find($id);

        return view('superadmin.super-edit-pathology-details', compact('path'));
    }




    public function updatePathContactDetails(Request $request, $id)
    {

        $request->validate([
            'clinic_registration_type' => 'string',
            'clinic_contact_person_name' => 'string|max:255',
            'clinic_gstin' => 'nullable|string',
            'clinic_mobile_number' => 'string|max:15',
            'clinic_email' => 'email|max:255',
            'clinic_landmark' => 'string|max:255',
            'clinic_pincode' => 'numeric|digits:6',
            'clinic_state' => 'string|max:255',
            'clinic_city' => 'string|max:255',
            'clinic_google_map_link' => 'nullable|string|max:500',
            'clinic_address' => 'string',
        ]);


        $contactDetails = PartnerPathologyContactModel::find($id);


        if (!$contactDetails) {
            return redirect()->back()->with('error', 'Contact details not found.');
        }


        $contactDetails->update($request->all());

        return redirect()->back()->with('success', 'Contact details updated successfully.');
    }


    public function deletePathContactDetails($id)
    {

        $contactDetails = PartnerPathologyContactModel::find($id);

        if (!$contactDetails) {
            return redirect()->back()->with('error', 'Contact details not found.');
        }

        $contactDetails->delete();

        return redirect()->back()->with('success', 'Contact details deleted successfully.');
    }




    public function addPathTestPageView($pid)
    {
        $pathBanner = PartnerPathologyBannerModel::where('currently_loggedin_partner_id', $pid)->first();

        $pathTests = PartnerAllPathologyTestModel::where('currently_loggedin_partner_id', $pid)
            ->orderBy('created_at', 'desc')
            ->get();

        // Decode visit_day_time if it's not null or empty
        foreach ($pathTests as $pathTest) {
            // Ensure that we handle case where visit_day_time might be null or empty
            $pathTest->test_day_time = !empty($pathTest->test_day_time) ? json_decode($pathTest->test_day_time, true) : [];
        }

        return view('superadmin.super-addpath-test', compact('pid', 'pathBanner', 'pathTests'));
    }






    public function addPathTests(Request $request)
    {
        // Validate the input
        $request->validate([
            'currently_loggedin_partner_id' => 'required|numeric',
            'test_name' => 'required|string|max:255',
            'test_type' => 'nullable|string|max:255',
            'test_price' => 'required|numeric',
            'test_day' => 'required|array',
            'test_day.*' => 'required|string|max:255',
            'test_start_time' => 'required|array',
            'test_start_time.*' => 'required|date_format:H:i',
            'test_end_time' => 'required|array',
            'test_end_time.*' => 'required|date_format:H:i|after:test_start_time.*',
        ]);

        // Prepare day and time data
        $testDayTime = [];
        foreach ($request->test_day as $index => $day) {
            $testDayTime[] = [
                'day' => $day,
                'start_time' => $request->test_start_time[$index] ?? null,
                'end_time' => $request->test_end_time[$index] ?? null,
            ];
        }

        // Create the pathology test
        PartnerAllPathologyTestModel::create([
            'currently_loggedin_partner_id' => $request->currently_loggedin_partner_id,
            'test_name' => $request->test_name,
            'test_type' => $request->test_type,
            'test_price' => $request->test_price,
            'test_day_time' => json_encode($testDayTime),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Pathology test added successfully!');
    }





    public function deletePathTest($id)
    {
        $opdDoctor = PartnerAllPathologyTestModel::find($id);

        if (!$opdDoctor) {
            return redirect()->back()->with('error', 'OPD Doctor details not found.');
        }

        $opdDoctor->delete();

        return redirect()->back()->with('success', 'OPD Doctor details deleted successfully!');
    }



    public function statusPathTestEdit(Request $request, $id)
    {

        $validated = $request->validate([
            'status' => 'string|nullable',
        ]);

        $pathTest = PartnerAllPathologyTestModel::find($id);

        if (!$pathTest) {
            return back()->withErrors(['error' => 'Pathlogy Details not found']);
        }

        if ($request->has('status')) {
            $pathTest->status = $request->status;
        }

        $pathTest->save();

        return back()->with('success', 'Updated successfully!');
    }








    public function addpathBanner(Request $request)
    {

        $validated = $request->validate([
            'currently_loggedin_partner_id' => 'required|numeric',
            'pathologybanner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $pathBannerPath = $this->uploadpathBanner($request);


        $this->updateOrCreatepathBanner($validated['currently_loggedin_partner_id'], $pathBannerPath);


        return redirect()->back()->with('success', 'OPD Banner uploaded/updated successfully.');
    }

    /**
     * Handles the upload of the OPD banner file.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    private function uploadpathBanner(Request $request)
    {
        if ($request->hasFile('pathologybanner')) {
            return $request->file('pathologybanner')->store('partner-pathology-profile', 'public');
        }

        return null;
    }

    /**
     * Updates or creates the OPD banner record for the partner.
     *
     * @param int $partnerId
     * @param string|null $pathBannerPath
     * @return void
     */
    private function updateOrCreatepathBanner(int $partnerId, ?string $pathBannerPath)
    {
        $pathBanner = PartnerPathologyBannerModel::firstOrNew(['currently_loggedin_partner_id' => $partnerId]);

        if ($pathBannerPath) {
            $pathBanner->pathologybanner = $pathBannerPath;
        }

        $pathBanner->save();
    }




    public function exportAsExel(Request $request){
        return Excel::download(new PathExport, 'path_details.xlsx');
    }
}
