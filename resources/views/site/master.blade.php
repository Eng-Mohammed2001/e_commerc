@php
    use App\Models\Category;
@endphp

<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>@yield('title', config('app.name'))</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="aviato" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('website/plugins/themefisher-font/style.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('website/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('website/plugins/animate/animate.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('website/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('website/plugins/slick/slick-theme.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    @yield('styles')
</head>

<body id="body">

    <!-- Start Top Header Bar -->
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <div class="contact-number">
                        <a href="tel:0129- 12323-123123"><i class="tf-ion-ios-telephone"></i>
                            <span>0129- 12323-123123</span></a>


                    </div>
                    <div class="contact-number">




                        <img width="16px"
                            src="https://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}@2x.png">


                        <span>{{ $weather['main']['temp'] }}℃</span>



                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <!-- Site Logo -->
                    <div class="logo text-center">
                        <a style="margin-top: 20px" href="{{ route('site.index') }}">
                            <!-- replace logo here -->

                            <img width="200px" src="{{ asset('website/images/logo/logo.png') }}" alt="">

                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-4">
                    <!-- Cart -->
                    <ul class="top-menu text-right list-inline">
                        <li class="dropdown cart-nav dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                    class="tf-ion-android-cart"></i>Cart</a>
                            <div class="dropdown-menu cart-dropdown">
                                @php
                                    $total = 0;
                                @endphp
                                <!-- Cart Item -->
                                @auth
                                    @foreach (auth()->user()->carts as $cart)
                                        <div class="media">
                                            <a class="pull-left" href="{{ route('site.course', $cart->course->slug) }}">
                                                <img class="media-object"
                                                    src="{{ asset('uploads/courses/' . $cart->course->image) }}"
                                                    alt="image" />
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a
                                                        href="{{ route('site.course', $cart->course->slug) }}">{{ $cart->course->title }}</a>
                                                </h4>
                                                {{-- <div class="cart-price">
                                                    <span>1 x</span>
                                                    <span>1250.00</span>
                                                </div> --}}
                                                <h5><strong>${{ $cart->course->price }}</strong></h5>
                                            </div>

                                            <button class="btn-delete remove"
                                                style="border: none; width: auto; padding: 0"><i
                                                    class="tf-ion-close"></i></button>
                                            <form style="display: inline"
                                                action="{{ route('site.remove_cart', $cart->id) }}" method="GET">
                                                @csrf
                                                @method('delete')
                                            </form>


                                        </div><!-- / Cart Item -->
                                        @php
                                            $total += $cart->course->price;
                                        @endphp
                                    @endforeach
                                @endauth
                                <div class="cart-summary">
                                    <span>Total</span>
                                    <span class="total-price">${{ number_format($total, 2) }}</span>
                                </div>
                                <ul class="text-center cart-buttons">
                                    <li><a href="{{ route('site.cart') }}" class="btn btn-small">View Cart</a></li>
                                    <li><a href="{{ route('site.checkout') }}"
                                            class="btn btn-small btn-solid-border">Checkout</a>
                                    </li>
                                </ul>
                            </div>

                        </li><!-- / Cart -->

                        <!-- Search -->
                        <li class="dropdown search dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                                    class="tf-ion-ios-search-strong"></i> Search</a>
                            <ul class="dropdown-menu search-dropdown">
                                <li>
                                    <form action="{{ route('site.search') }}" method="GET" ">
                                        <input type="search" name="title" class="form-control"
                                        placeholder="Search..." value="{{ request()->title }}">
                                    </form>
                                </li>
                            </ul>
                        </li><!-- / Search -->



                    </ul><!-- / .nav .navbar-nav .navbar-right -->
                </div>
            </div>
        </div>
    </section><!-- End Top Header Bar -->

    <!-- Main Menu Section -->
    <section class="menu">
        <nav class="navbar navigation">
            <div class="container">
                <div class="navbar-header">
                    <h2 class="menu-title">Main Menu</h2>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div><!-- / .navbar-header -->

                <!-- Navbar Links -->
                <div id="navbar" class="navbar-collapse collapse text-center">
                    <ul class="nav navbar-nav">

                        <!-- Home -->
                        <li class="dropdown ">
                            <a href="{{ route('site.index') }}">Home</a>
                        </li><!-- / Home -->
                        <!-- Home -->
                        <li class="dropdown ">
                            <a href="{{ route('site.about') }}">About</a>
                        </li><!-- / Home -->
                        <!-- Home -->
                        <li class="dropdown ">
                            <a href="{{ route('site.shop') }}">Shop</a>
                        </li><!-- / Home -->




                        <!-- Blog -->
                        <li class="dropdown dropdown-slide">
                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-delay="350" role="button" aria-haspopup="true" aria-expanded="false"
                                style="capt">Categories <span class="tf-ion-ios-arrow-down"></span></a>
                            <ul class="dropdown-menu">
                                       @foreach (Category::all() as $category)
                                <li><a href="{{ route('site.category', $category->id) }}">{{ $category->name }}</a>
                                </li>
                                @endforeach


                            </ul>
                        </li><!-- / Blog -->
                        <!-- Home -->
                        <li class="dropdown ">
                            <a href="{{ route('site.contact') }}">Contact</a>
                        </li><!-- / Home -->
                    </ul><!-- / .nav .navbar-nav -->

                </div>
                <!--/.navbar-collapse -->
            </div><!-- / .container -->
            </nav>
    </section>
    @yield('content')

    <footer class="footer section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="social-media">
                        <li>
                            <a href="https://www.facebook.com/themefisher">
                                <i class="tf-ion-social-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/themefisher">
                                <i class="tf-ion-social-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/themefisher">
                                <i class="tf-ion-social-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/themefisher/">
                                <i class="tf-ion-social-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="footer-menu text-uppercase">
                        <li>
                            <a href="contact.html">CONTACT</a>
                        </li>
                        <li>
                            <a href="shop.html">SHOP</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing</a>
                        </li>
                        <li>
                            <a href="contact.html">PRIVACY POLICY</a>
                        </li>
                    </ul>
                    

                    <p class="copyright-text">
                        Copyright &copy;<a href="{{ route('site.index') }}" target="_blank"
                            class="kt-link">&nbsp;{{ config('app.name') }} {{ date('Y') }}</a>

                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!--
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->

    <script src="{{ asset('website/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('website/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap Touchpin -->
    <script src="{{ asset('website/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
    <!-- Instagram Feed Js -->
    <script src="{{ asset('website/plugins/instafeed/instafeed.min.js') }}"></script>
    <!-- Video Lightbox Plugin -->
    <script src="{{ asset('website/plugins/ekko-lightbox/dist/ekko-lightbox.min.js') }}"></script>
    <!-- Count Down Js -->
    <script src="{{ asset('website/plugins/syo-timer/build/jquery.syotimer.min.js') }}"></script>

    <!-- slick Carousel -->
    <script src="{{ asset('website/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('website/plugins/slick/slick-animation.min.js') }}"></script>

    <!-- Google Mapl -->
    <script
        src="{{ asset('website/https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw') }}">
    </script>
    <script type="text/javascript" src="{{ asset('website/plugins/google-map/gmap.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('website/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('scripts')
    <script>
        $('.btn-delete').on('click', function() {
            let form = $(this).next('form');


            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });
    </script>
</body>

</html>
