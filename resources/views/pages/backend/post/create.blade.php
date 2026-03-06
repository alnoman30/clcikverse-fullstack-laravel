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
                        <div class="card-body p-0">

                            <div class="row">
                                <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">

                                    <form action="#" method="POST" enctype="multipart/form-data">

                                        <div class="card-body">

                                            <!-- Error Example -->
                                            <div class="alert alert-danger" style="display:none;">
                                                <ul class="mb-0">
                                                    <li>Title is required</li>
                                                </ul>
                                            </div>


                                            <div class="form-group">
                                                <label>Post Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    placeholder="Enter title">
                                            </div>


                                            <div class="form-group">
                                                <label>Post Category</label>

                                                <select class="form-control">
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
                                                    <input type="file" class="custom-file-input">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>

                                            </div>


                                            <div class="form-group">

                                                <label>Choose Post Tags</label>

                                                <div class="d-flex flex-wrap">

                                                    <div class="custom-control custom-checkbox mr-3">
                                                        <input class="custom-control-input" type="checkbox" id="tag1">
                                                        <label for="tag1" class="custom-control-label">Laravel</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox mr-3">
                                                        <input class="custom-control-input" type="checkbox" id="tag2">
                                                        <label for="tag2" class="custom-control-label">PHP</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox mr-3">
                                                        <input class="custom-control-input" type="checkbox" id="tag3">
                                                        <label for="tag3"
                                                            class="custom-control-label">JavaScript</label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox mr-3">
                                                        <input class="custom-control-input" type="checkbox" id="tag4">
                                                        <label for="tag4" class="custom-control-label">CSS</label>
                                                    </div>

                                                </div>

                                            </div>


                                            <div class="form-group">
                                                <label>Description</label>

                                                <textarea id="description" class="form-control"></textarea>

                                            </div>

                                        </div>


                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-lg btn-primary">
                                                Submit
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
@endsection
