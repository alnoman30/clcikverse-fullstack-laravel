@extends('layouts.backend.base')

@section('title', 'Dashboard - ClickVerse')

@section('content')

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Tag</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tag List</a></li>
                        <li class="breadcrumb-item active">Edit Tag</li>
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

                                <h3 class="card-title">Edit Tag - Technology</h3>

                                <a href="{{ route('admin.tag') }}" class="btn btn-primary">
                                    Go Back to Tag List
                                </a>

                            </div>
                        </div>


                        <!-- Card Body -->
                        <div class="card-body p-0">

                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">

                                    <form action="#" method="POST">

                                        <div class="card-body">

                                            <!-- Example Error -->
                                            <div class="alert alert-danger" style="display:none;">
                                                <ul class="mb-0">
                                                    <li>Tag name is required</li>
                                                </ul>
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Tag Name</label>
                                                <input type="text" name="name" class="form-control" value="Technology"
                                                    placeholder="Enter name">
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter description">Technology related articles</textarea>
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-lg btn-primary">
                                                Update Tag
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
@endsection
