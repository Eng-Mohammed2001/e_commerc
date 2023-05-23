@extends('site.master')
@section('title', 'Cart | ' . config('app.name'))

@section('content')


    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block" style="text-align: center ; margin-bottom: 95px ;">
                            <h3 style="">
                                The purchase Failed,
                                <a href="{{ route('site.index') }}" style="color: #555;">
                                    Go To Home page
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@section('scripts')
    <script>
        @if (session('msg'))
            Swal.fire({
                position: 'top-end',
                icon: '{{ session('type') }}',
                title: '<h5>{{ session('msg') }}!</h5>',
                showConfirmButton: false,
                timer: 1500
            })
        @endif

        setTimeout(() => {
            window.location.href = '/';
        }, 5000);
    </script>

@stop
