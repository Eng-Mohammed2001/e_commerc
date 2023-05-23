@extends('site.master')
@section('title', 'Checkout | ' . config('app.name'))
@section('styles')
    <style>
        .remove:hover {
            color: rgb(186, 12, 12);

        }
    </style>
@endsection
@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">
                            Checkout </h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('site.index') }}">Home</a></li>
                            <li class="active">Checkout</li>


                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-wrapper">
        <div class="checkout shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{ $id }}"></script>
                        <form action="{{ route('site.payment') }}" class="paymentWidgets" data-brands="VISA MASTER AMEX">
                        </form>


                    </div>
                    <div class="col-md-4">
                        <div class="product-checkout-details">
                            <div class="block">
                                <h4 class="widget-title">Order Summary</h4>
                                @php
                                    $total = 0;
                                @endphp


                                @auth

                                    @foreach (auth()->user()->carts as $cart)
                                        <div class="media product-card">
                                            <a class="pull-left" href="{{ route('site.course', $cart->course->slug) }}">
                                                <img class="media-object" width="60px" height="60px"
                                                    src="{{ asset('uploads/courses/' . $cart->course->image) }}" alt="Image">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a
                                                        href="{ route('site.course', $cart->course->slug) }}">{{ $cart->course->title }}</a>
                                                </h4>

                                                <div style="display: flex; justify-content: space-between; align-items: center">

                                                    <p class="price">${{ $cart->course->price }}</p>


                                                    <button class="btn-delete remove"
                                                        style="border: none; width: auto; padding: 0 ; background-color: transparent">
                                                        <span>Remove</span>
                                                    </button>


                                                    <form style="display: none"
                                                        action="{{ route('site.remove_cart', $cart->id) }}" method="GET">
                                                        @csrf
                                                        @method('delete')
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $total += $cart->course->price;
                                        @endphp
                                    @endforeach
                                @endauth



                                <hr>
                                <div class="summary-total">
                                    <span>Total</span>
                                    <span>${{ number_format($total, 2) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
