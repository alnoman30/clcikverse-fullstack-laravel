@extends('layouts.backend.base')

@section('title', 'Dashboard - ClickVerse')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tag List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
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
                                <h3 class="card-title">Category List</h3>
                                <a href="{{ route('category.create') }}" class="btn btn-primary">Create Tag</a>
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
                                    <th style="width:120px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tags as $tag)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td>{{ $tag->slug }}</td>
                                        <td class="d-flex">

                                            <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-sm btn-primary mr-1">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ route('tag.destroy', $tag->id) }}" method="POST" class="delete-form" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-sm btn-danger delete-btn">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No tags found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>

    </div>
</div>


<script>
document.querySelectorAll('.delete-btn').forEach(function(button) {
    button.addEventListener('click', function () {

        let form = this.closest('.delete-form');

        Swal.fire({
            title: 'Are you sure?',
            text: "This category will be deleted!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Delete'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });

    });
});
</script>

@endsection
