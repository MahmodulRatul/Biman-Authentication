@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="jumbotron">
            <h5>Welcome, {{ auth()->user()->email }}</h5>
            <h1 class="display-3">Biman Authentication System</h1>
            <p class="lead">This is a simple authentication service setup for Biman-Bangladesh-Airlines using laravel 8 Fortify and Bootstrap 4.</p>
            <hr class="my-4">
            <h2>Project Features:</h2>
            <ul>
                <li>User Login</li>
                <li>User Registration</li>
                <li>Email Verification</li>
                <li>Forget Password</li>
                <li>Reset Password</li>
            </ul>
            <p class="lead">
                <a class="btn btn-primary" href="https://github.com/MahmodulRatul/Biman-Authentication" target="_blank" role="button">
                    MahmodulRatul | Github
                </a>
            </p>
        </div>
    </div>
@endsection
