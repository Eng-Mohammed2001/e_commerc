@extends('layouts.app')

@section('title' , 'Forgot-Password')
@section('styles')
    <style>
        #cancel {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid white;
            border-radius: 2rem;
        }

        .kt-login__actions {
            display: flex;
            justify-content: center;
        }


        .kt-login__logo {
            margin-top: 50px !important
        }
    </style>
@stop
@section('content')
    <div class="kt-login__fogot">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Forgotten Password ?</h3>
            <div class="kt-login__desc">Enter your email to reset your password:</div>
        </div>



        <form method="POST" class="kt-form" action="{{ route('password.email') }}">

            @csrf
            <div class="input-group">
                <input id="email" type="email" placeholder="Email"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    required autocomplete="email" autofocus>

                @error('email')
                    <small class="invalid-feedback" role="alert">
                        {{ $message }}
                    </small>
                @enderror


            </div>
            <div class="kt-login__actions">
                <button type="submit"
                    class="request btn btn-brand btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('login') }}" id="cancel"
                    class=" btn-secondary btn-pill kt-login__btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
