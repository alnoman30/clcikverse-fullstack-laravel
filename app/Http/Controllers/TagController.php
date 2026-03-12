<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $tags = Tag::all();
        return view('pages.backend.tag.index', compact('tags'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('pages.backend.tag.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags,name',
            'description' => 'nullable',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        Tag::create($data);

        flash()->success('Tag created successfully.');
        return redirect()->route('tag.index');
    }

    // Display the specified resource.
    public function show(Tag $tag)
    {

    }

    // Show the form for editing the specified resource.
    public function edit(Tag $tag)
    {
        return view('pages.backend.tag.edit', compact('tag'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|unique:tags,name,' . $tag->id,
            'description' => 'nullable',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        $tag->update($data);

        flash()->success('Tag updated successfully.');
        return redirect()->route('tag.index');
    }

    // Remove the specified resource from storage.
    public function destroy(Tag $tag)
    {
        $tag->delete();
        flash()->success('Tag deleted successfully.');
        return redirect()->route('tag.index');
    }
}
