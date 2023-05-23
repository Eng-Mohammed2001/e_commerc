<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{ asset('dashbord/assets/css/pages/login/login-4.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('dashbord/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link rel="stylesheet" href="{{ asset('dashbord/assets/plugins/general/bootstrap/dist/js/bootstrap.min.css') }}"> --}}
    <link href="{{ asset('dashbord/assets/plugins/general/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet" type="text/css" />
    @yield('styles')
    <link rel="shortcut icon" href="{{ asset('dashbord/assets/media/logos/favicon.ico') }}" />
    <style>

    </style>
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body style="max-height: 100vh"
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
                style="background-image: url({{ asset('dashbord/assets/media/bg/bg-2.jpg') }});">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <a href="#">
                                <img width="200px" src="{{ asset('website/images/logo/logo-w.png') }}" alt="">
                            </a>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };
    </script>

    <script src="{{ asset('dashbord/assets/js/pages/custom/login/login-general.js') }}" type="text/javascript"></script>
    @yield('scripts')
    <!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>
