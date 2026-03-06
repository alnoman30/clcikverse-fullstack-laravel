@extends('layouts.backend.base')

@section('title', 'Dashboard - ClickVerse')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<!-- Main content -->
<div class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3>120</h3>
            <p>Posts</p>
          </div>
          <div class="icon">
            <i class="fas fa-pen-square"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>25</h3>
            <p>Categories</p>
          </div>
          <div class="icon">
            <i class="fas fa-tags"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>60</h3>
            <p>Tags</p>
          </div>
          <div class="icon">
            <i class="fas fa-tag"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>10</h3>
            <p>Users</p>
          </div>
          <div class="icon">
            <i class="fas fa-user"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="card">

          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
              <h3 class="card-title">Post List</h3>
              <a href="#" class="btn btn-primary">Post List</a>
            </div>
          </div>

          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Tags</th>
                  <th>Author</th>
                  <th>Created Date</th>
                  <th style="width: 40px">Action</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div style="max-width:70px; max-height:70px; overflow:hidden">
                      <img src="https://via.placeholder.com/70" class="img-fluid img-rounded">
                    </div>
                  </td>
                  <td>Sample Post Title</td>
                  <td>Technology</td>
                  <td>
                    <span class="badge badge-primary">Laravel</span>
                    <span class="badge badge-primary">PHP</span>
                  </td>
                  <td>Admin</td>
                  <td>06 Mar, 2026</td>
                  <td class="d-flex">
                    <a href="#" class="btn btn-sm btn-success mr-1">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary mr-1">
                      <i class="fas fa-edit"></i>
                    </a>
                    <button class="btn btn-sm btn-danger">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td colspan="8">
                    <h5 class="text-center">No posts found.</h5>
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
