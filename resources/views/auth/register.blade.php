@extends('layouts.frontend.base')

@section('title', 'ClickVerse - Home')
@section('content')
    @include('layouts.frontend.partials.header_two')
    <section class="s-content">

        <div class="row">
            <div class="column large-6 medium-8 tab-12" style="margin:auto">

                <h2 style="text-align:center">Create Account</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div style="margin-bottom:20px">
                        <label>Name</label>
                        <input type="text" name="name" required autofocus class="h-full-width">
                    </div>

                    <div style="margin-bottom:20px">
                        <label>Email</label>
                        <input type="email" name="email" required class="h-full-width">
                    </div>

                    <div style="margin-bottom:20px">
                        <label>Password</label>
                        <input type="password" name="password" required class="h-full-width">
                    </div>

                    <div style="margin-bottom:20px">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" required class="h-full-width">
                    </div>

                    <div>
                        <button type="submit" class="btn btn--primary h-full-width">
                            Register
                        </button>
                    </div>

                    <div style="margin-top:15px;text-align:center">
                        Already have an account?
                        <a href="{{ route('login') }}">Login</a>
                    </div>

                </form>

            </div>
        </div>

    </section>
@endsection
