@extends('layouts.base_auth')

@section('content')
    <div class="splash-container">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header">
                <img src="img/logo-xx.png" alt="logo" width="102" height="27" class="logo-img">
                <span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email"
                               placeholder="Username or Email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" required autofocus>

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
                    <div class="form-group row login-tools">
                        <div class="col-6 login-remember">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                       name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="custom-control-label">{{ __('Remember Me') }}</span>
                            </label>

                        </div>
                        <div class="col-6 login-forgot-password">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                    <div class="form-group login-submit">

                        <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Sign me in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="splash-footer"><span>Don't have an account? <a href="pages-sign-up.html">Sign Up</a></span></div>
@endsection
