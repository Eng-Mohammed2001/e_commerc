@extends('layouts.app')
@section('title' , 'Reset-Password')
@section('styles')
    <style>
        #signin {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid white;
        }

        #signup:hover {
            color: white;
        }

        .kt-login__logo {
            /* margin-bottom: 30px !important; */
            margin-top: 50px !important;
            ;
        }
    </style>
@stop
@section('content')
    <div class="kt-login__signin">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Reset Password</h3>
        </div>
        <form method="POST" class="kt-form" action="{{ route('password.update') }}">
            @csrf




            <div class="input-group">
                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" placeholder="Email" name="email"
                    autocomplete="email" value="{{ $email ?? old('email') }}" required>

                @error('email')
                    <small class="invalid-feedback"  role="alert">
                        {{ $message }}
                    </small>
                @enderror

            </div>
            <div class="input-group">
                <input autocomplete="new-password" class="form-control @error('password') is-invalid @enderror" id="password" type="password" placeholder="Password" name="password" required>
                @error('password')
                    <small class="invalid-feedback" role="alert">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="input-group">
                <input class="form-control" id="password-confirm" autocomplete="new-password" type="password" name="password_confirmation"
                    placeholder="Confirm Password" required>
            </div>
            <div class="kt-login__actions">
                <button id="kt_login_signin_submit" class="btn btn-brand btn-pill kt-login__btn-primary">Reset
                    Password</button>&nbsp;&nbsp;&nbsp;
                <div style="display: inline-block;">
                    <a id="signin" class="btn btn-secondary btn-pill kt-login__btn-secondary"
                        href="{{ route('login') }}">Sign
                        In</a>
                </div>
            </div>

        </form>
    </div>
@stop
