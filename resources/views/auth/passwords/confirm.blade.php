@extends('layouts.app')
@section('title', 'Confirm-Password')
@section('styles')
    <style>
        .kt-login__logo {
            margin-top: 50px !important
        }

        #signin {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid white;
        }
    </style>
@endsection
@section('content')

    <div class="kt-login__signin">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Confirm Password</h3>
        </div>

        <form method="POST" class="kt-form" action="{{ route('password.confirm') }}">
            @csrf
            <div class="input-group">
                <input id="password" type="password" placeholder="Password"
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">
                @error('password')
                    <small class="invalid-feedback" role="alert">
                        {{ $message }}
                    </small>
                @enderror

            </div>

            <div class="kt-login__actions">
                <button id="kt_login_signin_submit" class="btn btn-brand btn-pill kt-login__btn-primary">Confirm
                    Password</button>&nbsp;&nbsp;&nbsp;
                <div style="display: inline-block;">
                    @if (Route::has('password.request'))
                    <a id="signin" class="btn btn-secondary btn-pill kt-login__btn-secondary"
                    href="{{ route('password.request') }}">Forget Password ? </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection
