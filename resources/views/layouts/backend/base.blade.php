<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Panel')</title>

    <!-- Styles required by backend pages -->
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/toastr/toastr.min.css') }}">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @stack('styles')
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </nav>
        <!-- /.navbar -->

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Logo -->
            <a href="{{ route('admin.dashboard') }}" class="brand-link">
                <img src="{{ asset('assets/backend/img/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3"
                    style="opacity:.8">
                <span class="brand-text font-weight-light">ClickVerse</span>
            </a>

            <div class="sidebar">

                <!-- User -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('assets/backend/img/user2-160x160.jpg') }}" class="img-circle elevation-2">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                    </div>
                </div>

                <!-- Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column">

                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}"
                                class="nav-link @if (request()->routeIs('admin.dashboard')) active @endif">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('category.index') }}"
                                class="nav-link @if (request()->routeIs('category.index')) active @endif">
                                <i class="nav-icon fas fa-tags"></i>
                                <p>Categories</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('tag.index') }}"
                                class="nav-link @if (request()->routeIs('tag.index')) active @endif">
                                <i class="nav-icon fas fa-tag"></i>
                                <p>Tags</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('blog.index') }}"
                                class="nav-link @if (request()->routeIs('blog.index')) active @endif">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Blogs</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>Messages</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Users</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Settings</p>
                            </a>
                        </li>

                        <li class="nav-header">Your Account</li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-user"></i>
                                <p>Your Profile</p>
                            </a>
                        </li>

                        <!-- Logout link -->
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link logout">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                        <li class="text-center mt-5">
                            <a href="{{ route('home') }}" class="btn btn-primary text-white" target="_blank">
                                View Website
                            </a>
                        </li>

                    </ul>
                </nav>

            </div>

        </aside>

        <!-- Content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Developed By <a href="https://alnoman.vercel.app/">Abdullah Al Noman</a>
            </div>
            <strong>
                Copyright © {{ date('Y') }}
                <a href="https://github.com/alnoman30">ClickVerse</a>.
            </strong>
        </footer>

    </div>

    <!-- JavaScript libraries for backend -->
    <script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/toastr/toastr.min.js') }}"></script>

    @stack('scripts')

    <script>
        $(function() {
            bsCustomFileInput.init();
        });

        $(document).ready(function() {
            $('.nav-link.logout').on('click', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You will be logged out!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#logout-form').submit();
                    }
                });
            });
        });




    </script>

</body>

</html>
