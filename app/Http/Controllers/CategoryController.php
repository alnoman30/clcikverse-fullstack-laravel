<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $categories = Category::withCount('blogs')->get();
        return view('pages.backend.category.index', compact('categories'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('pages.backend.category.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'nullable',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        Category::create($data);

        flash()->success('Category created successfully.');
        return redirect()->route('category.index');
    }

    // Display the specified resource.
    public function show(Category $category)
    {
        //
    }

    // Show the form for editing the specified resource.
    public function edit(Category $category)
    {
        return view('pages.backend.category.edit', compact('category'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Category $category)
    {

        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'description' => 'nullable',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        $category->update($data);

        flash()->success('Category updated successfully.');
        return redirect()->route('category.index');
    }

    // Remove the specified resource from storage.
    public function destroy(Category $category)
    {
        $category->delete();
        flash()->success('Category deleted successfully.');
        return redirect()->route('category.index');
    }
}
