<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard
    public function index()
    {
        return view('pages.backend.dashboard.index');
    }






    // Post routes
    public function post()
    {
        return view('pages.backend.post.index');
    }

    public function postCreate()
    {
        return view('pages.backend.post.create');
    }


    public function postEdit($id)
    {
        return view('pages.backend.post.edit');
    }

    public function postShow($id)
    {
        return view('pages.backend.post.show');
    }
}
