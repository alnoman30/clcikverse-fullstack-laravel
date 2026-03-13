@extends('layouts.backend.base')

@section('title', 'Dashboard - ClickVerse')

@section('content')

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">View Post</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Post List</a></li>
                        <li class="breadcrumb-item active">View Post</li>
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

                                <h3 class="card-title">View Post</h3>

                                <a href="{{ route('blog.index') }}" class="btn btn-primary">
                                    Go Back to Post List
                                </a>

                            </div>

                        </div>


                        <!-- Card Body -->
                        <div class="card-body">

                            <table class="table table-bordered">

                                <tbody>

                                    <!-- Image -->
                                    <tr>
                                        <th style="width:200px">Feature Image</th>
                                        <td>
                                            <div style="max-width:300px;max-height:300px;overflow:hidden">
                                                @if ($blog->feature_image)
                                                    <img src="{{ asset('uploads/blogs/' . $blog->feature_image) }}"
                                                        class="img-fluid">
                                                @else
                                                    <img src="https://via.placeholder.com/300" class="img-fluid">
                                                @endif
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Title -->
                                    <tr>
                                        <th>Title</th>
                                        <td>{{ $blog->title }}</td>
                                    </tr>

                                    <!-- Category -->
                                    <tr>
                                        <th>Category Name</th>
                                        <td>{{ $blog->category->name ?? '-' }}</td>
                                    </tr>

                                    <!-- Tags -->
                                    <tr>
                                        <th>Post Tags</th>
                                        <td>
                                            @foreach ($blog->tags as $tag)
                                                <span class="badge badge-primary">{{ $tag->name }}</span>
                                            @endforeach
                                        </td>
                                    </tr>

                                    <!-- Author -->
                                    <tr>
                                        <th>Author Name</th>
                                        <td>{{ $blog->user->name ?? '-' }}</td>
                                    </tr>

                                    <!-- Description -->
                                    <tr>
                                        <th>Description</th>
                                        <td>{!! $blog->description !!}</td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
