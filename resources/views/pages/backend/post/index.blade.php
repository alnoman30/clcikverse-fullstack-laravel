@extends('layouts.backend.base')

@section('title', 'Dashboard - ClickVerse')

@section('content')

        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Post List</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Post List</li>
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

                                    <h3 class="card-title">Post List</h3>

                                    <a href="{{ route('admin.post.create') }}" class="btn btn-primary">
                                        Create Post
                                    </a>

                                </div>
                            </div>


                            <!-- Card Body -->
                            <div class="card-body p-0">

                                <table class="table table-striped">

                                    <thead>
                                        <tr>
                                            <th style="width:10px">#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Tags</th>
                                            <th>Author</th>
                                            <th style="width:130px">Created Date</th>
                                            <th style="width:120px">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>1</td>

                                            <td>
                                                <div style="max-width:70px;max-height:70px;overflow:hidden">
                                                    <img src="https://via.placeholder.com/70" class="img-fluid rounded">
                                                </div>
                                            </td>

                                            <td>Learn Laravel in 10 Days</td>

                                            <td>Programming</td>

                                            <td>
                                                <span class="badge badge-primary">Laravel</span>
                                                <span class="badge badge-primary">PHP</span>
                                            </td>

                                            <td>Admin</td>

                                            <td>05 Mar, 2026</td>

                                            <td class="d-flex">

                                                <a href="{{ route('admin.post.show', 1) }}" class="btn btn-sm btn-success mr-1">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                                <a href="{{ route('admin.post.edit', 1) }}" class="btn btn-sm btn-primary mr-1">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <a href="#" class="btn btn-sm btn-dark mr-1" target="_blank">
                                                    <i class="fas fa-link"></i>
                                                </a>

                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td>2</td>

                                            <td>
                                                <div style="max-width:70px;max-height:70px;overflow:hidden">
                                                    <img src="https://via.placeholder.com/70" class="img-fluid rounded">
                                                </div>
                                            </td>

                                            <td>JavaScript Best Practices</td>

                                            <td>Web Development</td>

                                            <td>
                                                <span class="badge badge-primary">JavaScript</span>
                                                <span class="badge badge-primary">Frontend</span>
                                            </td>

                                            <td>Admin</td>

                                            <td>04 Mar, 2026</td>

                                            <td class="d-flex">

                                                <a href="{{ route('admin.post.show', 2) }}" class="btn btn-sm btn-success mr-1">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                                <a href="{{ route('admin.post.edit', 2) }}" class="btn btn-sm btn-primary mr-1">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <a href="#" class="btn btn-sm btn-dark mr-1" target="_blank">
                                                    <i class="fas fa-link"></i>
                                                </a>

                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                            </td>
                                        </tr>


                                    </tbody>

                                </table>

                            </div>


                            <!-- Card Footer (Pagination Design) -->
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
