<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\PartnerPatientInquiry;
use Illuminate\Http\Request;

class SuperAllPatientInquiryController extends Controller
{
    public function indexOPD()
    {


        $inquiries = PartnerPatientInquiry::orderby('id', 'desc')->where('clinic_type', 'OPD')->paginate(8);

        return view('superadmin.super-opd-inquiry', compact('inquiries'));
    }



    public function opdDelete($id)
    {
        $inquiry = PartnerPatientInquiry::find($id);
        $inquiry->delete();
        return back()->with('success', 'Deleted successfully!');
    }










    public function indexPath()
    {

        $inquiries = PartnerPatientInquiry::orderby('id', 'desc')->where('clinic_type', 'Pathology')->paginate(8);

        return view('superadmin.super-path-inquiry', compact('inquiries'));
    }




    public function pathDelete($id)
    {
        $inquiry = PartnerPatientInquiry::find($id);
        $inquiry->delete();
        return back()->with('success', 'Deleted successfully!');
    }












    public function indexDoc()
    {

        $inquiries = PartnerPatientInquiry::orderby('id', 'desc')->where('clinic_type', 'Doctor')->paginate(8);

        return view('superadmin.super-doc-inquiry', compact('inquiries'));
    }




    public function docDelete($id)
    {
        $inquiry = PartnerPatientInquiry::find($id);
        $inquiry->delete();
        return back()->with('success', 'Deleted successfully!');
    }
}
