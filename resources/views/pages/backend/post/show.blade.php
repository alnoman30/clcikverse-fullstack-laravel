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

                                <a href="{{ route('admin.post') }}" class="btn btn-primary">
                                    Go Back to Post List
                                </a>

                            </div>

                        </div>


                        <!-- Card Body -->
                        <div class="card-body">

                            <table class="table table-bordered">

                                <tbody>

                                    <tr>
                                        <th style="width:200px">Image</th>

                                        <td>
                                            <div style="max-width:300px;max-height:300px;overflow:hidden">
                                                <img src="https://via.placeholder.com/300" class="img-fluid">
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <th>Title</th>
                                        <td>Learn Laravel in 10 Days</td>
                                    </tr>


                                    <tr>
                                        <th>Category Name</th>
                                        <td>Programming</td>
                                    </tr>


                                    <tr>
                                        <th>Post Tags</th>

                                        <td>
                                            <span class="badge badge-primary">Laravel</span>
                                            <span class="badge badge-primary">PHP</span>
                                            <span class="badge badge-primary">Backend</span>
                                        </td>

                                    </tr>


                                    <tr>
                                        <th>Author Name</th>
                                        <td>Admin</td>
                                    </tr>


                                    <tr>
                                        <th>Description</th>

                                        <td>
                                            <p>
                                                Laravel is one of the most popular PHP frameworks used for building modern
                                                web applications.
                                            </p>

                                            <p>
                                                It provides elegant syntax, powerful tools, and features like routing,
                                                authentication,
                                                and database management that make development faster and easier.
                                            </p>
                                        </td>

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
