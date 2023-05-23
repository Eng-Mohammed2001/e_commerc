@extends('layouts.app')
@section('title', 'Sign-Up')

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

        .kt-checkbox,
        .kt-checkbox a {
            font-size: 13px !important;
            font-weight: lighter;
        }

        .kt-login__logo {
            margin-bottom: 30px !important;
            margin-top: 20px !important;
            ;
        }
    </style>
@stop

@section('content')
    <div class="content">
        <div class="kt-login__head">
            <h3 style="font-size: 22px" class="kt-login__title">Sign Up</h3>
            <div style="font-size: 16px" class="kt-login__desc">Enter your details to create your
                account:</div>
        </div>
        <form style="margin-top:-20px " method="POST" action="{{ route('register') }}" class="kt-form">
            @csrf

            <div style="display: flex; justify-content: space-between" class="input-group">
                <input class="form-control @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}" id="name" autocomplete="name"
                    placeholder="Name" name="name" required>

                @error('name')
                    <small class="invalid-feedback" role="alert">
                        {{ $message }}
                    </small>
                @enderror





            </div>
            <div class="input-group">
                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" placeholder="Email" name="email"
                    autocomplete="email" value="{{ old('email') }}" required>

                @error('email')
                    <small class="invalid-feedback" role="alert">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="input-group">
                <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" placeholder="Password" name="password" required>
                @error('password')
                    <small class="invalid-feedback" role="alert">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="input-group">
                <input class="form-control" id="password-confirm" type="password" name="password_confirmation"
                    placeholder="Confirm Password" required>
            </div>


            <div class="row kt-login__extra">
                <div class="col kt-align-left">
                    <label class="kt-checkbox">
                        <input type="checkbox" name="agree" required>I Agree the <a href="#"
                            class="kt-link kt-login__link kt-font-bold @error('agree') is-invalid @enderror">terms and
                            conditions</a>.
                        <span></span>
                    </label>
                    <span class="form-text text-muted"></span>
                </div>
            </div>
            @error('agree')
                <small class="invalid-feedback" role="alert">
                    {{ $message }}
                </small>
            @enderror
            <div class="kt-login__actions">
                <button id="signup" class="btn btn-brand btn-pill kt-login__btn-primary">Sign
                    Up</button>&nbsp;&nbsp;
                <div style="display: inline-block;">
                    <a id="signin" class="btn btn-secondary btn-pill kt-login__btn-secondary"
                        href="{{ route('login') }}">Sign
                        In</a>
                </div>


            </div>
        </form>
    </div>
@stop
