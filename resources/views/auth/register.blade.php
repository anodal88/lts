@extends('layouts.base_auth')

@section('content')


<div class="splash-container sign-up">
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
            <img src="img/logo-xx.png" alt="logo" width="102" height="27" class="logo-img">
            <span class="splash-description">Please enter your user information.</span></div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <span class="splash-title pb-4">{{ __('Register') }}</span>
                <div class="form-group">
                    <input id="name" placeholder="{{ __('Name') }}" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="email" placeholder="{{ __('E-Mail Address') }}" type="email" autocomplete="off"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                           value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                  <div class="form-group">
                      <input id="password" type="password" placeholder="{{ __('Password') }}"
                             class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                             name="password"
                             required>

                      @if ($errors->has('password'))
                          <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                      @endif
                </div>
                  <div class="form-group">
                      <input id="password-confirm" placeholder="{{ __('Confirm Password') }}" type="password" class="form-control"
                             name="password_confirmation"
                             required>
                </div>


                <div class="form-group pt-2">
                    <button type="submit" class="btn btn-block btn-primary btn-xl">{{ __('Register') }}</button>
                </div>
                <div class="title"><span class="splash-title pb-3">Or</span></div>
                <div class="form-group row social-signup pt-0">
                    <div class="col-6">
                        <button type="button" class="btn btn-lg btn-block btn-social btn-facebook btn-color"><i
                                    class="mdi mdi-facebook icon icon-left"></i> Facebook
                        </button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-lg btn-block btn-social btn-google-plus btn-color"><i
                                    class="mdi mdi-google-plus icon icon-left"></i> Google Plus
                        </button>
                    </div>
                </div>
                <div class="form-group pt-3 mb-3">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input"><span class="custom-control-label">By creating an account, you agree the <a
                                    href="#">terms and conditions</a>.</span>
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="splash-footer">&copy; 2016 Your Company</div>
@endsection
