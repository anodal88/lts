@extends('layouts.base_auth')

@section('content')
    <div class="splash-container">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header">
                <img src="{{ asset('img/logo-xx.png') }}" alt="logo" width="102" height="27" class="logo-img">
                <span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.request') }}">
                    @csrf
                    <input type="hidden" autocomplete="off" placeholder="{{ __('E-Mail Address') }}" name="token"
                           value="{{ $token }}">

                    <div class="form-group">
                        <input placeholder="{{ __('E-Mail Address') }}" autocomplete="off" id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ $email or old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="password" type="password"
                               placeholder="Password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input placeholder="{{ __('Confirm Password') }}" autocomplete="off" id="password-confirm"
                               type="password"
                               class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                               name="password_confirmation" required>

                        @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group login-submit">
                        <button type="submit" class="btn btn-block btn-primary btn-xl">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
