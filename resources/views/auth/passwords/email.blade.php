@extends('layouts.base_auth')

@section('content')

    <div class="splash-container forgot-password">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header">
                <img src="{{ asset('img/logo-xx.png') }}" alt="logo" width="102" height="27" class="logo-img">
                <span class="splash-description">Forgot your password?</span></div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <p>Don't worry, we'll send you an email to reset your password.</p>
                    <div class="form-group pt-4">
                        <input id="email" type="email" placeholder="Your Email" autocomplete="off"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <p class="pt-1 pb-4">Don't remember your email? <a href="#">Contact Support</a>.</p>
                    <div class="form-group pt-1">
                        <button type="submit" class="btn btn-block btn-primary btn-xl">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="splash-footer">&copy; {{ date('Y') }} Your Company</div>
    </div>

@endsection
