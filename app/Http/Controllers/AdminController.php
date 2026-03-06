<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.backend.dashboard.index');
    }

    public function category()
    {
        return view('pages.backend.category.index');
    }

    public function categoryCreate()
    {
        return view('pages.backend.category.create');
    }

    public function categoryEdit($id)
    {
        return view('pages.backend.category.edit');
    }
}
