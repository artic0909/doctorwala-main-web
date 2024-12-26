<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\DwUserModel;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class SuperAllUserController extends Controller
{
    public function index(Request $request)
    {
        $query = DwUserModel::query();


        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('user_name', 'like', "%{$search}%")
                ->orWhere('user_email', "%{$search}%")->orWhere('user_mobile', 'like', "%{$search}%")->orWhere('user_city', 'like', "%{$search}%");
        }

        $users = $query->paginate(10);
        return view('superadmin.super-all-user', compact('users'));
    }

    public function delete($id)
    {
        $userInfo = DwUserModel::find($id);

        $userInfo->delete();

        return back()->with('success', 'deleted successfully!');
    }


    public function exportAsExel(Request $request){
        return Excel::download(new UsersExport, 'user_details.xlsx');
    }
}
