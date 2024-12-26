<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\DwPartnerModel;
use App\Models\PartnerOPDContactModel;
use App\Models\PartnerAllOPDDoctorModel;
use App\Models\PartnerOPDBannerModel;
use App\Exports\OpdExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class SuperAllOPDHandleController extends Controller
{



    public function opdView(Request $request)
    {
        $opds = PartnerOPDContactModel::orderBy('created_at', 'desc')->paginate(8);


        foreach ($opds as $opd) {

            $partner = DwPartnerModel::where('id', $opd->currently_loggedin_partner_id)->first();


            if ($partner) {
                $opd->pid = $partner->id;
                $opd->partner_id = $partner->partner_id;
                $opd->partner_clinic_name = $partner->partner_clinic_name;
            } else {

                $opd->pid = null;
                $opd->partner_id = null;
                $opd->partner_clinic_name = null;
            }
        }



        return view('superadmin.super-all-opd', compact('opds'));
    }




    public function statusEdit(Request $request, $id)
    {

        $validated = $request->validate([
            'status' => 'string|nullable',
        ]);

        $opd = PartnerOPDContactModel::find($id);

        if (!$opd) {
            return back()->withErrors(['error' => 'OPD Details not found']);
        }

        if ($request->has('status')) {
            $opd->status = $request->status;
        }

        $opd->save();

        return back()->with('success', 'Updated successfully!');
    }





    public function opdEditPageView($id)
    {

        $opd = PartnerOPDContactModel::find($id);

        return view('superadmin.super-edit-opd-details', compact('opd'));
    }




    public function updateOPDContactDetails(Request $request, $id)
    {

        $request->validate([
            'clinic_registration_type' => 'string',
            'clinic_contact_person_name' => 'string|max:255',
            'clinic_name' => 'string',
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


        $contactDetails = PartnerOPDContactModel::find($id);


        if (!$contactDetails) {
            return redirect()->back()->with('error', 'Contact details not found.');
        }


        $contactDetails->update($request->all());

        return redirect()->back()->with('success', 'Contact details updated successfully.');
    }


    public function deleteOPDContactDetails($id){

        $contactDetails = PartnerOPDContactModel::find($id);

        if (!$contactDetails) {
            return redirect()->back()->with('error', 'Contact details not found.');
        }

        $contactDetails->delete();

        return redirect()->back()->with('success', 'Contact details deleted successfully.');
    }




    public function addOPDDoctorPageView($pid)
    {

        $opdBanner = PartnerOPDBannerModel::where('currently_loggedin_partner_id', $pid)->first();



        $opdDoctors = PartnerAllOPDDoctorModel::where('currently_loggedin_partner_id', $pid)
            ->orderBy('created_at', 'desc')
            ->get();


        foreach ($opdDoctors as $opdDoctor) {
            $opdDoctor->visit_day_time = json_decode($opdDoctor->visit_day_time, true);
        }

        return view('superadmin.super-addopd-doctor', compact('pid', 'opdBanner', 'opdDoctors'));
    }






    public function addOPDDoctor(Request $request)
    {


        // Validate the input
        $request->validate([
            'currently_loggedin_partner_id' => 'required|numeric',
            'doctor_name' => 'required|string|max:255',
            'doctor_designation' => 'required|string|max:255',
            'doctor_specialist' => 'required|string|max:255',
            'doctor_fees' => 'required|numeric',
            'doctor_visit_day' => 'required|array',
            'doctor_visit_day.*' => 'required|string|max:255',
            'doctor_visit_start_time' => 'required|array',
            'doctor_visit_start_time.*' => 'required|date_format:H:i',
            'doctor_visit_end_time' => 'required|array',
            'doctor_visit_end_time.*' => 'required|date_format:H:i',
        ]);

        // Prepare visit day and time data
        $visitDayTime = [];
        foreach ($request->doctor_visit_day as $index => $day) {
            $visitDayTime[] = [
                'day' => $day,
                'start_time' => $request->doctor_visit_start_time[$index],
                'end_time' => $request->doctor_visit_end_time[$index],
            ];
        }

        // Prepare the data to be stored
        $data = [
            'currently_loggedin_partner_id' => $request->currently_loggedin_partner_id, // Always store the partner ID
            'doctor_name' => $request->doctor_name,
            'doctor_designation' => $request->doctor_designation,
            'doctor_specialist' => $request->doctor_specialist,
            'doctor_fees' => $request->doctor_fees,
            'visit_day_time' => json_encode($visitDayTime), // Ensure it's stored as JSON
        ];

        // Store new data for the partner without overwriting existing records
        PartnerAllOPDDoctorModel::create($data);

        return redirect()->back()->with('success', 'OPD Doctor details added successfully!');
    }




    public function deleteOPDDoctor($id)
    {
        $opdDoctor = PartnerAllOPDDoctorModel::find($id);

        if (!$opdDoctor) {
            return redirect()->back()->with('error', 'OPD Doctor details not found.');
        }

        $opdDoctor->delete();

        return redirect()->back()->with('success', 'OPD Doctor details deleted successfully!');
    }



    public function statusOPDDoctorEdit(Request $request, $id)
    {

        $validated = $request->validate([
            'status' => 'string|nullable',
        ]);

        $opdDoctor = PartnerAllOPDDoctorModel::find($id);

        if (!$opdDoctor) {
            return back()->withErrors(['error' => 'OPD Details not found']);
        }

        if ($request->has('status')) {
            $opdDoctor->status = $request->status;
        }

        $opdDoctor->save();

        return back()->with('success', 'Updated successfully!');
    }








    public function addOPDBanner(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'currently_loggedin_partner_id' => 'required|numeric',
            'opdbanner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload the OPD banner if present
        $opdBannerPath = $this->uploadOpdBanner($request);

        // Update or create the OPD banner record
        $this->updateOrCreateOpdBanner($validated['currently_loggedin_partner_id'], $opdBannerPath);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'OPD Banner uploaded/updated successfully.');
    }

    /**
     * Handles the upload of the OPD banner file.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    private function uploadOpdBanner(Request $request)
    {
        if ($request->hasFile('opdbanner')) {
            return $request->file('opdbanner')->store('partner-opd-profile', 'public');
        }

        return null;
    }

    /**
     * Updates or creates the OPD banner record for the partner.
     *
     * @param int $partnerId
     * @param string|null $opdBannerPath
     * @return void
     */
    private function updateOrCreateOpdBanner(int $partnerId, ?string $opdBannerPath)
    {
        $opdBanner = PartnerOPDBannerModel::firstOrNew(['currently_loggedin_partner_id' => $partnerId]);

        if ($opdBannerPath) {
            $opdBanner->opdbanner = $opdBannerPath;
        }

        $opdBanner->save();
    }





    public function exportAsExel(Request $request){
        return Excel::download(new OpdExport, 'opd_details.xlsx');
    }
}
