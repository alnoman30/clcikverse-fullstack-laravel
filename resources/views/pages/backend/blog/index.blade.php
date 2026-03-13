@extends('layouts.backend.base')

@section('title', 'Dashboard - ClickVerse')

@section('content')

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Blog List</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blog List</li>
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

                                <h3 class="card-title">Blog List</h3>

                                <a href="{{ route('blog.create') }}" class="btn btn-primary">
                                    Create Blog
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
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>
                                                <div style="max-width:70px;max-height:70px;overflow:hidden">
                                                    <img src="{{ asset('uploads/blogs/' . $blog->feature_image) }}"
                                                        class="img-fluid rounded">
                                                </div>
                                            </td>

                                            <td>{{ $blog->title }}</td>

                                            <td>{{ $blog->category->name }}</td>

                                            <td>
                                                @foreach ($blog->tags as $tag)
                                                    <span class="badge badge-primary">{{ $tag->name }}</span>
                                                @endforeach
                                            </td>

                                            <td>{{ $blog->user->name }}</td>

                                            <td>{{ $blog->created_at->format('d M, Y') }}</td>

                                            <td class="d-flex">

                                                <a href="{{ route('blog.show', 1) }}" class="btn btn-sm btn-success mr-1">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                                <a href="{{ route('blog.edit', 1) }}" class="btn btn-sm btn-primary mr-1">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <a href="#" class="btn btn-sm btn-dark mr-1" target="_blank">
                                                    <i class="fas fa-link"></i>
                                                </a>

                                                <form action="{{ route('blog.destroy', $blog->id) }}"
                                                    method="POST" class="delete-form" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="button" class="btn btn-sm btn-danger mr-1 delete-btn">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach



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


    <script>
document.querySelectorAll('.delete-btn').forEach(function(button) {
    button.addEventListener('click', function () {

        let form = this.closest('.delete-form');

        Swal.fire({
            title: 'Are you sure?',
            text: "This Blog will be deleted!",
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
