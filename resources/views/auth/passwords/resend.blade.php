@extends('layouts.app')

@section('title', 'Confirm-Sending')
@section('styles')
    <style>
        .kt-login__logo {
            margin-top: 50px !important
        }

        span.hidden {
            display: none;
        }

        a.hidden {
            display: none;
        }

        a#resend {
            padding: 15px 30px;
            font-size: 14px;
            text-align: center;
            font-weight: 100;
            text-decoration: none;
            background-color: #5d78ff;
            color: #ffffff;
            border-radius: 2rem;
        }

        a#resend:hover {
            background-color: #3758ff;

        }

        .kt-resend {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 150px;
            height: 50px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>

@endsection

@section('content')
    <div class="container">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Verification has been sent to your email successfully</h3>
        </div>
        <div class="kt-resend">
            <span id="timer">Resend After &nbsp;<span id="counter">0:30</span></span>
            <a id="resend" class="hidden" href="{{ route('password.request') }}">Resend</a>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        let time = 29;
        const counter = document.getElementById("counter");
        let timer = setInterval(updateCountdown, 1000);

        function updateCountdown() {
            counter.innerHTML = `0:${time}`;
            time--;
            if (time == -1) {
                clearInterval(timer);
                document.getElementById("timer").classList.add("hidden");
                document.getElementById("resend").classList.remove("hidden");
            }
        }
    </script>

@stop
