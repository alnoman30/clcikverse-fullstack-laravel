@extends('layouts.backend.base')

@section('title', 'Dashboard - ClickVerse')

@section('content')

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tag List</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tag List</li>
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
                                <h3 class="card-title">Tag List</h3>
                                <a href= "{{ route('admin.tag.create') }}" class="btn btn-primary">Create Tag</a>
                            </div>
                        </div>


                        <!-- Card Body -->
                        <div class="card-body p-0">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:10px">#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th style="width:100px">Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Technology</td>
                                        <td>technology</td>
                                        <td class="d-flex">
                                            <a href="{{ route('admin.tag.edit', 1) }}" class="btn btn-sm btn-primary mr-1">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Programming</td>
                                        <td>programming</td>
                                        <td class="d-flex">
                                            <a href="{{ route('admin.tag.edit', 2) }}" class="btn btn-sm btn-primary mr-1">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Laravel</td>
                                        <td>laravel</td>
                                        <td class="d-flex">
                                            <a href="{{ route('admin.tag.edit', 3) }}" class="btn btn-sm btn-primary mr-1">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>


                        <!-- Card Footer -->
                        <div class="card-footer d-flex justify-content-center">

                            <nav>
                                <ul class="pagination mb-0">

                                    <li class="page-item disabled">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>

                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>

                                </ul>
                            </nav>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
