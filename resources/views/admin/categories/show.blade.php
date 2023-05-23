@extends('admin.master')


@section('title', 'Show Category | ' . config('app.name'))
@section('styles')
    <link href="{{ asset('dashbord/assets/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')



    <div class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">


                    <h3 class="kt-portlet__head-title">

                        <span style="color: #5d78ff;" class="kt-menu__link-icon"><i class="fas fa-fw fa-tags"></i>


                        </span>&nbsp;<span>

                            {{ $category->name }}
                        </span>
                    </h3>
                </div>
            </div>


            <!-- begin:: Content -->
            <div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="first">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-grid">
                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                            <div class="kt-form">
                                {{-- <div class="kt-wizard-v4__content" data-ktwizard-state="current"> --}}
                                <div class="kt-heading kt-heading--md">Category Details:</div>
                                <div class="kt-section kt-section--first">
                                    <div class="kt-wizard-v4__form">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="kt-section__body">
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-4 col-form-label">Category
                                                            Image</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <div style="width: 100%" class="kt-avatar kt-avatar--outline"
                                                                id="kt_user_add_avatar">
                                                                <div class="kt-avatar__holder"
                                                                    style="width:100%;height: 300px;; background-image: url({{ asset('uploads/categories/' . $category->image) }})">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Category
                                                            Name</label>
                                                        <label style="color: black"
                                                            class="col-xl-9 col-lg-9 col-form-label">{{ $category->name }}
                                                        </label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Category
                                                            Description</label>
                                                        <label style="color: black"
                                                            class="col-xl-9 col-lg-9 col-form-label"><?php echo $category->description; ?>
                                                        </label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Parent</label>
                                                        <label style="color: black"
                                                            class="col-xl-9 col-lg-9 col-form-label">
                                                            {{ $category->parent->name }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- end:: Content -->
        </div>
    </div>

@stop


@section('scripts')
    <script src="{{ asset('dashbord/assets/js/pages/crud/datatables/advanced/footer-callback.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('dashbord/assets/js/pages/custom/user/add-user.js') }}" type="text/javascript"></script>

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

@stop
