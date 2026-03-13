@extends('layouts.backend.base')

@section('title', 'Edit Post - ClickVerse')

@section('content')

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Post</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Post List</a></li>
                        <li class="breadcrumb-item active">Edit Post</li>
                    </ol>
                </div>

            </div>

        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">

                        <!-- Card Header -->
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Edit Blog - {{ $blog->title }}</h3>

                                <a href="{{ route('blog.index') }}" class="btn btn-primary">Go Back to Blog List</a>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">

                                    <form action="{{ route('blog.update', $blog->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <!-- Title -->
                                        <div class="form-group">
                                            <label>Post Title</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter title" value="{{ old('title', $blog->title) }}">
                                            @error('title')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Category -->
                                        <div class="form-group">
                                            <label>Post Category</label>
                                            <select class="form-control" name="category_id">
                                                <option selected disabled>Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Image -->
                                        <div class="form-group">
                                            <label>Post Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image">
                                                <label class="custom-file-label">
                                                    {{ $blog->feature_image ?? 'Choose file' }}
                                                </label>
                                            </div>
                                            @if ($blog->feature_image)
                                                <div class="mt-2">
                                                    <img src="{{ asset('uploads/blogs/' . $blog->feature_image) }}"
                                                        class="img-fluid" style="max-width:150px">
                                                </div>
                                            @endif
                                            @error('image')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Tags -->
                                        <div class="form-group">
                                            <label>Choose Post Tags</label>
                                            <div class="d-flex flex-wrap">
                                                @foreach ($tags as $tag)
                                                    <div class="custom-control custom-checkbox mr-3">
                                                        <input class="custom-control-input" type="checkbox"
                                                            id="tag{{ $tag->id }}" name="tags[]"
                                                            value="{{ $tag->id }}"
                                                            {{ is_array(old('tags', $blog->tags->pluck('id')->toArray())) &&
                                                            in_array($tag->id, old('tags', $blog->tags->pluck('id')->toArray()))
                                                                ? 'checked'
                                                                : '' }}>
                                                        <label for="tag{{ $tag->id }}" class="custom-control-label">
                                                            {{ $tag->name }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                            @error('tags')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Description -->
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" id="description">{{ old('description', $blog->description ?? '') }}</textarea>
                                            @error('description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Submit -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

@push('scripts')
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ClassicEditor
                .create(document.querySelector('#description'))
                .then(editor => {
                    editor.ui.view.editable.element.style.height = '400px';
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endpush
