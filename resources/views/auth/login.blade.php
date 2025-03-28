@extends('layouts.landing.index')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #ffffff;">
    <div class="col-md-6">
        <div class="card shadow-lg border-0" style="background-color: #f5f5f5;">
            <div class="card-header text-center" style="background-color: #d2cab7; color: #fff;">
                <h4>Login</h4>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf 
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" id="email" name="email" required autofocus>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn login-btn text-white">
                            <i class="bi bi-box-arrow-in-right"></i> Log in
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        @if (Route::has('password.request'))
                            <a class="text-decoration-none" href="{{ route('password.request') }}">
                                <small>{{ __('Forgot Your Password?') }}</small>
                            </a>
                        @endif
                    </div>

                    @if (session('error'))
                        <div class="alert alert-danger mt-3 text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .login-btn {
        background-color: #d2cab7;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .login-btn:hover {
        background-color: #4682b4;
        transform: scale(1.05);
    }
</style>
@endsection

