@extends('layouts.frontend.base')

@section('title', 'ClickVerse - Home')
@section('content')
    @include('layouts.frontend.partials.header_two')
    <section class="s-content">

        <div class="row">
            <div class="column large-6 medium-8 tab-12" style="margin:auto">

                <h2 style="text-align:center">Login</h2>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div style="margin-bottom:20px">
                        <label>Email</label>
                        <input type="email" name="email" required autofocus class="h-full-width">
                    </div>

                    <div style="margin-bottom:20px">
                        <label>Password</label>
                        <input type="password" name="password" required class="h-full-width">
                    </div>

                    <div style="margin-bottom:20px">
                        <label>
                            <input type="checkbox" name="remember">
                            Remember Me
                        </label>
                    </div>

                    <div>
                        <button type="submit" class="btn btn--primary h-full-width">
                            Login
                        </button>
                    </div>

                    <div style="margin-top:15px;text-align:center">
                        <a href="{{ route('register') }}">Create Account</a>
                    </div>

                </form>

            </div>
        </div>

    </section>
@endsection









