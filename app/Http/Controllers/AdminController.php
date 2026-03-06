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


    // Category
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



    // Tag
    public function tag()
    {
        return view('pages.backend.tag.index');
    }

    public function tagCreate()
    {
        return view('pages.backend.tag.create');
    }

    public function tagEdit($id)
    {
        return view('pages.backend.tag.edit');
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
