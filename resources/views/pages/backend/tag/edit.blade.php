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

                                <h3 class="card-title">Edit Tag - {{ $tag->name }}</h3>

                                <a href="{{ route('tag.index') }}" class="btn btn-primary">
                                    Go Back to Tag List
                                </a>

                            </div>
                        </div>


                        <!-- Card Body -->
                        <div class="card-body p-0">

                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">

                                    <form action="{{ route('tag.update', $tag->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="name">Tag Name</label>
                                                <input type="text" name="name" value="{{ old('name', $tag->name) }}" class="form-control"
                                                    placeholder="Enter name">
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter description">{{ old('description', $tag->description) }}</textarea>
                                                @error('description')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
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
