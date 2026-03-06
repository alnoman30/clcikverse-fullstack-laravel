@extends('layouts.backend.base')

@section('title', 'Dashboard - ClickVerse')

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
                        <li class="breadcrumb-item"><a href="#">Post List</a></li>
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

                                <h3 class="card-title">Edit Post - Learn Laravel</h3>

                                <a href="{{ route('admin.post') }}" class="btn btn-primary">
                                    Go Back to Post List
                                </a>

                            </div>

                        </div>


                        <!-- Card Body -->
                        <div class="card-body p-0">

                            <div class="row">
                                <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">

                                    <div class="card-body">

                                        <form action="#" method="POST" enctype="multipart/form-data">

                                            <!-- Error Example -->
                                            <div class="alert alert-danger" style="display:none;">
                                                <ul class="mb-0">
                                                    <li>Title is required</li>
                                                </ul>
                                            </div>


                                            <!-- Title -->
                                            <div class="form-group">
                                                <label>Post Title</label>
                                                <input type="text" class="form-control" value="Learn Laravel in 10 Days">
                                            </div>


                                            <!-- Category -->
                                            <div class="form-group">
                                                <label>Post Category</label>

                                                <select class="form-control">

                                                    <option>Select Category</option>
                                                    <option selected>Programming</option>
                                                    <option>Technology</option>
                                                    <option>Web Development</option>

                                                </select>

                                            </div>


                                            <!-- Image Upload -->
                                            <div class="form-group">

                                                <div class="row">

                                                    <div class="col-8">

                                                        <label>Image</label>

                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input">
                                                            <label class="custom-file-label">Choose file</label>
                                                        </div>

                                                    </div>


                                                    <div class="col-4 text-right">

                                                        <div
                                                            style="max-width:100px;max-height:100px;overflow:hidden;margin-left:auto">

                                                            <img src="https://via.placeholder.com/100" class="img-fluid">

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>


                                            <!-- Tags -->
                                            <div class="form-group">

                                                <label>Choose Post Tags</label>

                                                <div class="d-flex flex-wrap">

                                                    <div class="custom-control custom-checkbox mr-3">
                                                        <input class="custom-control-input" type="checkbox" id="tag1"
                                                            checked>
                                                        <label class="custom-control-label" for="tag1">Laravel</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox mr-3">
                                                        <input class="custom-control-input" type="checkbox" id="tag2"
                                                            checked>
                                                        <label class="custom-control-label" for="tag2">PHP</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox mr-3">
                                                        <input class="custom-control-input" type="checkbox" id="tag3">
                                                        <label class="custom-control-label"
                                                            for="tag3">JavaScript</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox mr-3">
                                                        <input class="custom-control-input" type="checkbox" id="tag4">
                                                        <label class="custom-control-label" for="tag4">CSS</label>
                                                    </div>

                                                </div>

                                            </div>


                                            <!-- Description -->
                                            <div class="form-group">

                                                <label>Description</label>

                                                <textarea id="description" class="form-control">
Laravel is a powerful PHP framework used to build modern web applications.
</textarea>

                                            </div>


                                            <!-- Button -->
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">
                                                    Update Post
                                                </button>
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
    </div>


    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#description').summernote({
                placeholder: 'Write post description...',
                tabsize: 2,
                height: 300
            });

        });
    </script>

    </html>
@endsection
