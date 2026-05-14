@extends('layouts.app')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card border-0 shadow-sm p-4 rounded-4">
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Sophie Logo" height="80" class="mb-3">
                        <h2 class="fw-bold">Reset Password</h2>
                        <p class="text-muted small">Enter your email for a secure reset link</p>
                    </div>

                    <div class="mb-4 small text-muted">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="alert alert-success mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">Email Address</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" 
                                class="form-control @error('email') is-invalid @enderror" 
                                required autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg rounded-3 py-2 fw-bold" style="background: linear-gradient(135deg, #0d47a1, #1958bc);">
                                Send Reset Link
                            </button>
                            <a href="{{ route('login') }}" class="btn btn-link text-decoration-none">Back to login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
