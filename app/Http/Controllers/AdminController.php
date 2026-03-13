<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard
    public function index()
    {
        $blogs = Blog::latest()->get();
        $categories = Category::all();
        $tags = Tag::all();
        $users = User::all();

        return view('pages.backend.dashboard.index', compact('blogs', 'categories', 'tags', 'users'));
    }
}
