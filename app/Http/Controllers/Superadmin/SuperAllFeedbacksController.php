<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\PartnerFeedback;
use Illuminate\Http\Request;

class SuperAllFeedbacksController extends Controller
{
    public function index()
    {
        $feedbacks = PartnerFeedback::orderBy('created_at', 'desc')->paginate(8);

        return view('superadmin.super-all-feedbacks', compact('feedbacks'));
    }

    public function delete($id)
    {
        $feedback = PartnerFeedback::find($id);
        $feedback->delete();
        return back()->with('success', 'Feedback deleted successfully');
    }
}
