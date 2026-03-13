<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->get();
        $categories = Category::all();
        $tags = Tag::all();

        return view('pages.frontend.index', compact('blogs', 'categories', 'tags'));
    }

public function singleBlog($slug)
{
    $blog = Blog::with(['category','user','tags'])
        ->where('slug', $slug)
        ->firstOrFail();

    $categories = Category::all();
    $tags = Tag::all();

    // Previous blog
    $previous = Blog::where('id', '<', $blog->id)
        ->orderBy('id', 'desc')
        ->first();

    // Next blog
    $next = Blog::where('id', '>', $blog->id)
        ->orderBy('id', 'asc')
        ->first();

    return view('pages.frontend.single-blog', compact(
        'blog',
        'categories',
        'tags',
        'previous',
        'next'
    ));
}

    public function contact(){
         $categories = Category::all();
        return view('pages.frontend.contact', compact('categories'));
    }
}
