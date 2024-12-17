<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\FrontContactModel;

class SuperUserInquiryController extends Controller
{
    public function index(){

        $inquiries = FrontContactModel::orderBy('id', 'desc')->paginate(8);

        return view('superadmin.super-user-inquiry', compact('inquiries'));
    }

    public function delete($id){
        $inquiry = FrontContactModel::find($id);
        $inquiry->delete();
        return redirect()->back()->with('success', 'Inquiry deleted successfully');
    }
}
