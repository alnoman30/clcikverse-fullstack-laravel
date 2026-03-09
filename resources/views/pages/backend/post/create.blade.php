@extends('layouts.backend.base')

@section('title', 'Dashboard - ClickVerse')

@section('content')

<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create Post</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Post List</a></li>
                    <li class="breadcrumb-item active">Create Post</li>
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

                                    <h3 class="card-title">Create Post</h3>

                                    <a href="{{ route('admin.post') }}" class="btn btn-primary">
                                        Go Back to Post List
                                    </a>

                                </div>
                            </div>

                    <!-- Card Body -->
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">

                                <form action="#" method="POST" enctype="multipart/form-data">

                                    @csrf

                                    <div class="form-group">
                                        <label>Post Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter title">
                                    </div>

                                    <div class="form-group">
                                        <label>Post Category</label>
                                        <select class="form-control" name="category_id">
                                            <option selected disabled>Select Category</option>
                                            <option>Technology</option>
                                            <option>Programming</option>
                                            <option>Web Development</option>
                                            <option>Design</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Choose Post Tags</label>
                                        <div class="d-flex flex-wrap">
                                            <div class="custom-control custom-checkbox mr-3">
                                                <input class="custom-control-input" type="checkbox" id="tag1" name="tags[]" value="1">
                                                <label for="tag1" class="custom-control-label">Laravel</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mr-3">
                                                <input class="custom-control-input" type="checkbox" id="tag2" name="tags[]" value="2">
                                                <label for="tag2" class="custom-control-label">PHP</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mr-3">
                                                <input class="custom-control-input" type="checkbox" id="tag3" name="tags[]" value="3">
                                                <label for="tag3" class="custom-control-label">JavaScript</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mr-3">
                                                <input class="custom-control-input" type="checkbox" id="tag4" name="tags[]" value="4">
                                                <label for="tag4" class="custom-control-label">CSS</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <div id="editor" style="height:300px;"></div>
                                        <input type="hidden" name="description" id="description">
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
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
<!-- Quill JS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
var quill = new Quill('#editor', {
    theme: 'snow',
    modules: {
        toolbar: [
            [{ header: [1, 2, false] }],
            ['bold', 'italic', 'underline'],
            ['link', 'image'],
            [{ list: 'ordered'}, { list: 'bullet' }],
            ['clean']
        ]
    }
});

// Save editor content to hidden input on submit
document.querySelector('form').onsubmit = function() {
    document.querySelector('#description').value = quill.root.innerHTML;
};
</script>
@endpush
