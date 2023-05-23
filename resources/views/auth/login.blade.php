@extends('layouts.app')
@section('title','Login')
@section('styles')
    <style>
        .kt-login__logo {
            margin-top: 50px !important
        }
    </style>
@endsection


@section('content')

    <div class="kt-login__signin">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Sign In To Admin</h3>
        </div>

        <form method="POST" class="kt-form" action="{{ route('login') }}">
            @csrf
            <div class="input-group">

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                @error('email')
                    <small class="invalid-feedback" role="alert">
                        {{ $message }}
                    </small>
                @enderror

            </div>
            <div class="input-group">


                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <small class="invalid-feedback" role="alert">
                        {{ $message }}
                    </small>
                @enderror

            </div>
            <div class="row kt-login__extra">
                <div class="col">
                    <label class="kt-checkbox">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                        <span></span>
                    </label>
                </div>
                <div class="col kt-align-right">
                    @if (Route::has('password.request'))
                        <a class="kt-login__link" href="{{ route('password.request') }}">
                            Forget Password ? </a>
                    @endif
                </div>
            </div>
            <div class="kt-login__actions">
                <button id="kt_login_signin_submit" class="btn btn-brand btn-pill kt-login__btn-primary">Sign In</button>
            </div>
        </form>
    </div>
    <div class="kt-login__account">
        <span class="kt-login__account-msg">
            Don't have an account yet ?
        </span>
        &nbsp;&nbsp;

        <a href="{{ route('register') }}" class="kt-login__account-link">Sign Up!</a>
    </div>
@stop
