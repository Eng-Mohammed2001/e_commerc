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
    <base href="">
    <meta charset="utf-8" />
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->

    <!--end::Page Vendors Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->

    <!--begin:: Vendor Plugins -->
    <link href="{{ asset('dashbord/assets/plugins/general/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/tether/dist/css/tether.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('dashbord/assets/plugins/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/bootstrap-daterangepicker/daterangepicker.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/bootstrap-select/dist/css/bootstrap-select.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('dashbord/assets/plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/select2/dist/css/select2.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/ion-rangeslider/css/ion.rangeSlider.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/nouislider/distribute/nouislider.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/owl.carousel/dist/assets/owl.carousel.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/owl.carousel/dist/assets/owl.theme.default.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/dropzone/dist/dropzone.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/quill/dist/quill.snow.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/@yaireo/tagify/dist/tagify.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/summernote/dist/summernote.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/bootstrap-markdown/css/bootstrap-markdown.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/animate.css/animate.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/toastr/build/toastr.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/dual-listbox/dist/dual-listbox.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/morris.js/morris.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('dashbord/assets/plugins/general/socicon/css/socicon.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/plugins/line-awesome/css/line-awesome.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/plugins/flaticon/flaticon.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/plugins/flaticon2/flaticon.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/general/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!--end:: Vendor Plugins -->
    <link href="{{ asset('dashbord/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--begin:: Vendor Plugins for custom pages -->
    <link href="{{ asset('dashbord/assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/custom/@fullcalendar/core/main.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/custom/@fullcalendar/daygrid/main.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/custom/@fullcalendar/list/main.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/custom/@fullcalendar/timegrid/main.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/custom/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('dashbord/assets/plugins/custom/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('dashbord/assets/plugins/custom/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('dashbord/assets/plugins/custom/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('dashbord/assets/plugins/custom/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('dashbord/assets/plugins/custom/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('dashbord/assets/plugins/custom/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('dashbord/assets/plugins/custom/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('dashbord/assets/plugins/custom/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('dashbord/assets/plugins/custom/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('dashbord/assets/plugins/custom/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/custom/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/custom/jstree/dist/themes/default/style.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/custom/jqvmap/dist/jqvmap.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/assets/plugins/custom/uppy/dist/uppy.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!--end:: Vendor Plugins for custom pages -->

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{ asset('dashbord/assets/css/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/css/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/css/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashbord/assets/css/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <style>
        table th,
        table td {
            vertical-align: middle;
        }
    </style>
    @yield('styles')
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="{{ route('site.index') }}">
                <img alt="Logo" width="100px" src="{{ asset('dashbord/assets/media/logos/logo-w.png') }}" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            @include('admin.aside')
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">


                    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="opacity: 1;">
                    </div>
                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar">
                        <!--begin: User Bar -->
                        <div style="margin-right: 20px" class="kt-header__topbar-item dropdown">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px"
                                aria-expanded="false">
                                <span class="kt-header__topbar-icon"><i
                                        class="flaticon2-bell-alarm-symbol position-relative"></i>
                                </span>
                                @if (auth()->user()->unreadnotifications->count() != 0)
                                    <span
                                        class="kt-badge kt-badge--danger kt-badge--sm kt-badge--rounded position-absolute "
                                        style="top : 6px;right: -8px; z-index: 22222222;">{{ auth()->user()->unreadnotifications->count() }}</span>
                                @endif
                            </div>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-lg"
                                x-placement="bottom-end"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(44px, 79px, 0px);">

                                <!--begin: Head -->
                                <div class="kt-head kt-head--skin-light kt-head--fit-x kt-head--fit-b">
                                    <h3 style="padding-bottom: 20px ; margin-top: -10px !important"
                                        class="kt-head__title">
                                        User Notifications
                                        &nbsp;
                                        @if (auth()->user()->unreadnotifications->count() > 1)
                                            <a class="btn btn-label-primary btn-sm btn-bold btn-font-md"
                                                href="{{ route('read_all_notify') }}">
                                                Read All
                                            </a>
                                        @endif
                                        {{-- <span></span> --}}
                                    </h3>

                                </div>

                                <!--end: Head -->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="topbar_notifications_notifications"
                                        role="tabpanel">
                                        <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll ps"
                                            data-scroll="true" {{-- @if (auth()->user()->notifications->count() >= 3) data-height="205" data-mobile-height="205" --}}
                                            @if (auth()->user()->notifications->count() >= 2) data-height="180"
                                                        data-mobile-height="140"
                                                            @elseif (auth()->user()->notifications->count() <= 1)
                                                            data-height="90" data-mobile-height="70" @endif
                                            style="height: 300px; overflow: hidden;">

                                            @if (auth()->user()->notifications->count() == 0)
                                                <div
                                                    style="display:flex; justify-content: center; align-items: center; height: 70px; border-radius: 4px">
                                                    <span class="kt-datatable--error">No Notifications Founded</span>

                                                </div>
                                                {{-- <div class="kt-notification__item">
                                                    <div class="kt-notification__item-details">

                                                    </div>
                                                </div> --}}
                                            @else
                                                @foreach (auth()->user()->notifications as $notification)
                                                    <a href="{{ route('read_notify', $notification->id) }}"
                                                        class="kt-notification__item {{ $notification->read_at ? 'kt-notification__item--read' : '' }}">

                                                        <div class="kt-notification__item-details">
                                                            <div class="kt-notification__item-title">
                                                                {{ Str::words($notification->data['data'], 10, '...') }}
                                                            </div>
                                                            <div class="kt-notification__item-time">
                                                                {{ $notification->created_at->diffForHumans() }}
                                                            </div>
                                                        </div>
                                                        <div class="kt-notification__item-icon">

                                                            <form
                                                                action="{{ route('delete_notify', $notification->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button
                                                                    style="border: transparent; background-color: transparent;">
                                                                    <i style="opacity: 0.7; color: #fd397a"
                                                                        class="flaticon2-rubbish-bin"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </a>
                                                @endforeach
                                            @endif



                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                <div class="ps__thumb-x" tabindex="52"
                                                    style="left: 0px; width: 0px;"></div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px"
                                aria-expanded="false">
                                <div class="kt-header__topbar-user">
                                    <span style="text-transform: capitalize"
                                        class="kt-header__topbar-username kt-hidden-mobile">{{ Auth::user()->name }}</span>
                                    <img style="border-radius:8px"
                                        class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"
                                        src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}"
                                        alt="">
                                </div>
                            </div>
                            <div style="min-width: 139px; text-align: center; padding: 5px 0; height: 45px;  "
                                class="dropdown-menu dropdown-menu-fit  dropdown-menu-anim" x-placement="bottom-end">

                                <!--begin: Head -->
                                <div style="transform: translateY(2.5px);">


                                    <!--begin: Navigation -->

                                    <form style="width: 100%" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button style="width: 100%"
                                            class="btn btn-label btn-label-brand btn-sm btn-bold">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Sign
                                            Out</button>
                                    </form>
                                    <!--end: Navigation -->
                                </div>
                            </div>
                        </div>

                        <!--end: User Bar -->
                    </div>

                    <!-- end:: Header Topbar -->
                </div>
                <!-- end:: Header -->
                <!-- begin:: Content -->
                <div
                    class="kt-container kt-container-content  kt-container--fluid  kt-grid__item kt-grid__item--fluid ">
                    @yield('content')
                </div>

                <!-- end:: Content -->
                <!-- begin:: Footer -->
                <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-footer__copyright">
                            Copyright &copy;<a href="{{ route('site.index') }}" target="_blank"
                                class="kt-link">&nbsp;{{ config('app.name') }} {{ date('Y') }}</a>
                        </div>
                    </div>
                </div>
                <!-- end:: Footer -->
            </div>
        </div>
    </div>
    <!-- end:: Page -->
    <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>
    <!-- end::Scrolltop -->
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

    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->

    <!--begin:: Vendor Plugins -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/popper.js/dist/umd/popper.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/js-cookie/src/js.cookie.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/wnumb/wNumb.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/jquery-form/dist/jquery.form.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/block-ui/jquery.blockUI.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js') }}"
        type="text/javascript"></script>
    <script
        src="{{ asset('dashbord/assets/plugins/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/bootstrap-daterangepicker/daterangepicker.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/bootstrap-maxlength/src/bootstrap-maxlength.js') }}"
        type="text/javascript"></script>
    <script
        src="{{ asset('dashbord/assets/plugins/general/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/bootstrap-select/dist/js/bootstrap-select.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/js/global/integration/plugins/bootstrap-switch.init.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/select2/dist/js/select2.full.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/ion-rangeslider/js/ion.rangeSlider.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/typeahead.js/dist/typeahead.bundle.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/handlebars/dist/handlebars.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/inputmask/dist/jquery.inputmask.bundle.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/inputmask/dist/inputmask/inputmask.date.extensions.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/nouislider/distribute/nouislider.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/autosize/dist/autosize.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/clipboard/dist/clipboard.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/dropzone/dist/dropzone.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/js/global/integration/plugins/dropzone.init.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/quill/dist/quill.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/@yaireo/tagify/dist/tagify.polyfills.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/@yaireo/tagify/dist/tagify.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/summernote/dist/summernote.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/markdown/lib/markdown.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/bootstrap-markdown/js/bootstrap-markdown.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/js/global/integration/plugins/bootstrap-markdown.init.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/bootstrap-notify/bootstrap-notify.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/js/global/integration/plugins/bootstrap-notify.init.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/jquery-validation/dist/jquery.validate.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/jquery-validation/dist/additional-methods.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/js/global/integration/plugins/jquery-validation.init.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/toastr/build/toastr.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/dual-listbox/dist/dual-listbox.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/raphael/raphael.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/morris.js/morris.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/chart.js/dist/Chart.bundle.js') }}" type="text/javascript">
    </script>
    <script
        src="{{ asset('dashbord/assets/plugins/general/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/plugins/jquery-idletimer/idle-timer.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/counterup/jquery.counterup.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/es6-promise-polyfill/promise.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/jquery.repeater/src/lib.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/jquery.repeater/src/jquery.input.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/general/jquery.repeater/src/repeater.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/general/dompurify/dist/purify.js') }}" type="text/javascript"></script>

    <!--end:: Vendor Plugins -->
    <script src="{{ asset('dashbord/assets/js/scripts.bundle.js') }}" type="text/javascript"></script>

    <!--begin:: Vendor Plugins for custom pages -->
    <script src="{{ asset('dashbord/assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/@fullcalendar/core/main.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/@fullcalendar/daygrid/main.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/@fullcalendar/google-calendar/main.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/@fullcalendar/interaction/main.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/@fullcalendar/list/main.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/@fullcalendar/timegrid/main.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/flot/dist/es5/jquery.flot.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/flot/source/jquery.flot.resize.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/flot/source/jquery.flot.categories.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/flot/source/jquery.flot.pie.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/flot/source/jquery.flot.stack.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/flot/source/jquery.flot.crosshair.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/flot/source/jquery.flot.axislabels.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net/js/jquery.dataTables.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/js/global/integration/plugins/datatables.init.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-autofill/js/dataTables.autoFill.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/jszip/dist/jszip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/pdfmake/build/pdfmake.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/pdfmake/build/vfs_fonts.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-buttons/js/dataTables.buttons.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-buttons/js/buttons.colVis.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-buttons/js/buttons.flash.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-buttons/js/buttons.html5.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-buttons/js/buttons.print.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-colreorder/js/dataTables.colReorder.min.js') }}"
        type="text/javascript"></script>
    <script
        src="{{ asset('dashbord/assets/plugins/custom/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js') }}"
        type="text/javascript"></script>
    <script
        src="{{ asset('dashbord/assets/plugins/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js') }}"
        type="text/javascript"></script>
    <script
        src="{{ asset('dashbord/assets/plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-rowgroup/js/dataTables.rowGroup.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-rowreorder/js/dataTables.rowReorder.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-scroller/js/dataTables.scroller.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/datatables.net-select/js/dataTables.select.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/jstree/dist/jstree.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/jqvmap/dist/jquery.vmap.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.world.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.russia.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.usa.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.germany.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.europe.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/uppy/dist/uppy.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/tinymce/tinymce.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/plugins/custom/tinymce/themes/silver/theme.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('dashbord/assets/plugins/custom/tinymce/themes/mobile/theme.js') }}" type="text/javascript">
    </script>

    <!--end:: Vendor Plugins for custom pages -->

    <!--end::Global Theme Bundle -->
    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="{{ asset('dashbord/assets/js/pages/dashboard.js') }}" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        var userId = '{{ Auth::id() }}';
    </script>
    @vite(['resources/js/app.js'])
    @yield('scripts')
    <!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>
