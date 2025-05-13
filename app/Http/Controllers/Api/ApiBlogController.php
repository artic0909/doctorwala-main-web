<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SuperBlogModel;

class ApiBlogController extends Controller
{
    public function index()
    {
        $blogs = SuperBlogModel::latest()->get();

        return response()->json([
            'status' => true,
            'count' => $blogs->count(),
            'blogs' => $blogs
        ]);
    }
}
