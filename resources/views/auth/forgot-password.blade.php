@extends('layouts.landing.index')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header">{{ __('Forgot Password') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('Email Address') }}</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Email Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

