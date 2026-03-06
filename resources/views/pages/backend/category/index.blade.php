@extends('layouts.backend.base')

@section('title', 'Dashboard - ClickVerse')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Category List</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
          <li class="breadcrumb-item active">Category List</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">

          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
              <h3 class="card-title">Category List</h3>
              <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Create Category</a>
            </div>
          </div>

          <div class="card-body p-0">
            <table class="table table-striped">

              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Post Count</th>
                  <th style="width: 40px">Action</th>
                </tr>
              </thead>

              <tbody>

                <tr>
                  <td>1</td>
                  <td>Technology</td>
                  <td>technology</td>
                  <td>12</td>
                  <td class="d-flex">
                    <a href="{{ route('admin.category.edit', 1) }}" class="btn btn-sm btn-primary mr-1">
                      <i class="fas fa-edit"></i>
                    </a>

                    <button class="btn btn-sm btn-danger mr-1">
                      <i class="fas fa-trash"></i>
                    </button>

                    <a href="#" class="btn btn-sm btn-success">
                      <i class="fas fa-eye"></i>
                    </a>
                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Programming</td>
                  <td>programming</td>
                  <td>8</td>
                  <td class="d-flex">
                    <a href="{{ route('admin.category.edit', 2) }}" class="btn btn-sm btn-primary mr-1">
                      <i class="fas fa-edit"></i>
                    </a>

                    <button class="btn btn-sm btn-danger mr-1">
                      <i class="fas fa-trash"></i>
                    </button>

                    <a href="#" class="btn btn-sm btn-success">
                      <i class="fas fa-eye"></i>
                    </a>
                  </td>
                </tr>

                <tr>
                  <td colspan="5">
                    <h5 class="text-center">No categories found.</h5>
                  </td>
                </tr>

              </tbody>

            </table>
          </div>

          <div class="card-footer d-flex justify-content-center">
            <!-- Pagination design -->
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

@endsection
