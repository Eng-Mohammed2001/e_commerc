@extends('site.master')
@section('title', $course->title . ' | ' . config('app.name'))
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .star-rating {
            font-size: 0;
        }

        .star-rating__wrap {
            display: inline-block;
            font-size: 1rem;
        }

        .star-rating__wrap:after {
            content: "";
            display: table;
            clear: both;
        }

        .star-rating__ico {
            float: right;
            padding-left: 2px;
            cursor: pointer;
            color: #FFB300;
        }

        .star-rating__ico:last-child {
            padding-left: 0;
        }

        .star-rating__input {
            display: none;
        }

        .star-rating__ico:hover:before,
        .star-rating__ico:hover~.star-rating__ico:before,
        .star-rating__input:checked~.star-rating__ico:before {
            content: "\f005";
        }
    </style>
@stop
@section('content')

    <section class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('site.index') }}">Home</a></li>
                        <li><a href="{{ route('site.shop') }}">Shop</a></li>
                        <li class="active">{{ $course->title }}</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <ol class="product-pagination text-right">
                        @if ($next)
                            <li><a href="{{ route('site.course', $next->slug) }}"><i class="tf-ion-ios-arrow-left"></i>
                                    Next </a></li>
                        @endif
                        @if ($prev)
                            <li><a href="{{ route('site.course', $prev->slug) }}">Preview <i
                                        class="tf-ion-ios-arrow-right"></i></a></li>
                        @endif

                    </ol>
                </div>
            </div>
            <div class="row mt-20">
                <div class="col-md-5">
                    <div class="single-product-slider">
                        <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                            <div class="carousel-outer">
                                <!-- me art lab slider -->
                                <div class="carousel-inner ">

                                    <div class="item active">
                                        <img src="{{ asset('uploads/courses/' . $course->image) }}" alt=""
                                            data-zoom-image="images/shop/single-products/product-4.jpg">
                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-details">
                        <h2>{{ $course->title }}</h2>
                        @php
                            $rating = $course->reviews->avg('star');
                            $total_review = number_format($rating, 1);
                        @endphp

                        @foreach (range(1, 5) as $i)
                            <span class="fa-stack" style="width:1em">
                                <i class="far fa-star fa-stack-1x"></i>

                                @if ($rating > 0)
                                    @if ($rating > 0.5)
                                        <i style="color: #FFB300" class="fas fa-star fa-stack-1x"></i>
                                    @else
                                        <i style="color: #FFB300" class="fas fa-star-half fa-stack-1x"></i>
                                    @endif
                                @endif
                                @php $rating--; @endphp
                            </span>
                        @endforeach
                        <br>
                        <small>{{ $total_review }} <i class="tf-ion-star"></i> Based on
                            {{ $course->reviews->count() }}</small>




                        <p class="product-price">${{ $course->price }}</p>

                        <div class="product-description mt-20">{!! Str::words($course->description, 20, '...') !!}
                        </div>
                        <div class="product-category">
                            <span>Categories:</span>
                            <ul>
                                <li><a
                                        href="{{ route('site.category', $course->category_id) }}">{{ $course->category->name }}</a>
                                </li>
                            </ul>
                        </div>
                        <form action="{{ route('site.add_to_cart') }}" method="POST">
                            @csrf
                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                            <button class="btn btn-main mt-20">Add To Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="tabCommon mt-20">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Details</a>
                            </li>
                            <li class=""><a data-toggle="tab" href="#reviews" aria-expanded="false">Reviews
                                    ({{ $course->reviews->count() }})</a></li>
                        </ul>
                        <div class="tab-content patternbg">
                            <div id="details" class="tab-pane fade active in">
                                <h4>Product Description</h4>
                                {!! $course->description !!}
                            </div>
                            <div id="reviews" class="tab-pane fade">
                                <div class="post-comments">
                                    <ul class="media-list comments-list m-bot-50 clearlist">
                                        <!-- Comment Item start-->
                                        @foreach ($course->reviews as $review)
                                            <li class="media">

                                                <a class="pull-left" href="#!">
                                                    <img class="media-object comment-avatar"
                                                        src="https://ui-avatars.com/api/?name={{ $review->user->name }}"
                                                        alt="" width="50" height="50">
                                                </a>

                                                <div class="media-body">
                                                    <div class="comment-info">
                                                        <h4 class="comment-author">
                                                            <a href="#!">{{ $review->user->name }}</a>

                                                        </h4>
                                                        <time datetime="{{ $review->created_at }}">
                                                            {{ $review->created_at->format('F d,Y') }}
                                                            ,at
                                                            {{ $review->created_at->format('h:i') }} </time>
                                                        <a class="comment-button" href="#!"><i
                                                                class="tf-ion-star"></i>{{ $review->star }}</a>
                                                    </div>

                                                    <p>
                                                        {{ $review->comment }} </p>
                                                </div>

                                            </li>
                                        @endforeach
                                        <!-- End Comment Item -->

                                    </ul>
                                </div>
                                <h3>Add New Review</h3>
                                <link rel="stylesheet"
                                    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                                <form action="{{ route('site.course_review', $course->slug) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                    <div class="star-rating">
                                        <div class="star-rating__wrap">
                                            <input class="star-rating__input" id="star-rating-5" type="radio"
                                                name="rating" value="5">
                                            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5"
                                                title="5 out of 5 stars"></label>
                                            <input class="star-rating__input" id="star-rating-4" type="radio"
                                                name="rating" value="4">
                                            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4"
                                                title="4 out of 5 stars"></label>
                                            <input class="star-rating__input" id="star-rating-3" type="radio"
                                                name="rating" value="3">
                                            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3"
                                                title="3 out of 5 stars"></label>
                                            <input class="star-rating__input" id="star-rating-2" type="radio"
                                                name="rating" value="2">
                                            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2"
                                                title="2 out of 5 stars"></label>
                                            <input class="star-rating__input" id="star-rating-1" type="radio"
                                                name="rating" value="1">
                                            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1"
                                                title="1 out of 5 stars"></label>
                                        </div>
                                    </div>
                                    <textarea class="form-control" style="max-width: 100% ; min-width: 100%; margin-bottom: 20px" name="comment"
                                        id="comment"rows="4" placeholder="comment8..."></textarea>
                                    <button class="btn btn-main mt20">Post Review</button>
                                    {{-- <input type="text"> --}}
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products related-products section">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h2>Related Products</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($related as $course)
                    <div class="col-md-3">
                        @include('site.includes.courses')
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    </script>
@endsection
