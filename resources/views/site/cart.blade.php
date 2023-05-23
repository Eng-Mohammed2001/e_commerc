@extends('site.master')
@section('title', 'Cart | ' . config('app.name'))

@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">
                            Cart </h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('site.index') }}">Home</a></li>
                            <li class="active">Cart</li>


                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block">
                            <div class="product-list">
                                @if (auth()->user()->carts->count() > 0)
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="">Title</th>
                                                <th class="">Price</th>
                                                <th class="">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $total = 0;
                                            @endphp
                                            <!-- Cart Item -->
                                            @foreach (auth()->user()->carts as $cart)
                                                <tr class="">
                                                    <td class="">
                                                        <div class="product-info">
                                                            <img width="80"
                                                                src="{{ asset('uploads/courses/' . $cart->course->image) }}"
                                                                alt="">
                                                            <a
                                                                href="{{ route('site.course', $cart->course->slug) }}">{{ $cart->course->title }}</a>
                                                        </div>
                                                    </td>
                                                    <td class="">{{ $cart->course->price }}</td>
                                                    <td class="">
                                                        <button class="btn-delete product-remove form-control"
                                                            style="border: none; width: auto; padding: 0">Remove</button>
                                                        <form style="display: inline"
                                                            action="{{ route('site.remove_cart', $cart->id) }}"
                                                            method="GET">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </td>
                                                </tr>
                                                @php
                                                    $total += $cart->course->price;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <a href="{{ route('site.checkout') }}" class="btn btn-main pull-right">Checkout</a>
                                @else
                                    <div class="text-center">

                                        <a href="{{ route('site.shop') }}" class="btn btn-main">Shop Now</a>
                                    </div>

                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
