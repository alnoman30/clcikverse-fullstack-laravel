@extends('layouts.backend.base')

@section('title', 'Dashboard - ClickVerse')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">

      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Create Category</h1>
      </div>

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admin.category') }}">Category List</a></li>
          <li class="breadcrumb-item active">Create Category</li>
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
              <h3 class="card-title">Create Category</h3>
              <a href="{{ route('admin.category') }}" class="btn btn-primary">Go Back to Category List</a>
            </div>
          </div>

          <div class="card-body p-0">

            <div class="row">
              <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">

                <form action="#" method="POST">

                  <div class="card-body">

                    <div class="form-group">
                      <label for="name">Category Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" id="description" rows="4" class="form-control"
                        placeholder="Enter description"></textarea>
                    </div>

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
