<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // Display all blogs
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('pages.backend.blog.index', compact('blogs'));
    }

    // Show create form
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.backend.blog.create', compact('categories','tags'));
    }

    // Store blog
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'description' => 'required',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        // Upload image
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/blogs'), $imageName);
        }

        // Create blog
        $blog = Blog::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'feature_image' => $imageName,
            'description' => $request->description,
        ]);

        // Attach tags (pivot)
        if ($request->tags) {
            $blog->tags()->sync($request->tags);
        }

        flash()->success('Blog created successfully');
        return redirect()->route('blog.index');
    }

    // Edit blog
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.backend.blog.edit', compact('blog','categories','tags'));
    }

    // Update blog
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'description' => 'required',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        // Handle image update
        $imageName = $blog->feature_image;
        if ($request->hasFile('image')) {
            if ($blog->feature_image && file_exists(public_path('uploads/blogs/'.$blog->feature_image))) {
                unlink(public_path('uploads/blogs/'.$blog->feature_image));
            }
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads/blogs'), $imageName);
        }

        // Update blog
        $blog->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'feature_image' => $imageName,
            'description' => $request->description,
        ]);

        // Sync tags
        $blog->tags()->sync($request->tags);

        flash()->success('Blog updated successfully');
        return redirect()->route('blog.index');
    }

    // Delete blog
    public function destroy(Blog $blog)
    {
        if ($blog->feature_image && file_exists(public_path('uploads/blogs/'.$blog->feature_image))) {
            unlink(public_path('uploads/blogs/'.$blog->feature_image));
        }
        $blog->delete();
        flash()->success('Blog deleted successfully');
        return redirect()->route('blog.index');
    }

    public function show(Blog $blog)
    {
        $blog->load('category', 'user', 'tags');
        return view('pages.backend.blog.show', compact('blog'));
    }
}
