@extends('admin.master')


@section('title', 'Create Course | ' . config('app.name'))
@section('styles')
    <link href="{{ asset('dashbord/assets/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />


@stop
@section('content')



    <div class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">

                    <span class="kt-portlet__head-icon">
                        <i class="fas fa-plus-square fa-lg" style="color: #5d78ff;"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Create New Course
                    </h3>
                </div>
            </div>


            <!-- begin:: Content -->
            <div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="first">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-grid">
                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                            <!--begin: Form Wizard Form-->
                            <form class="kt-form" method="POST" enctype="multipart/form-data"
                                action="{{ route('admin.courses.store') }}">
                                @csrf
                           @include('admin.courses._form')

                                <!--end: Form Wizard Step 1-->
                                <!--begin: Form Actions -->
                                <div class="kt-form__actions">

                                    <button class="btn btn-brand btn-icon-sm">Submit</button>
                                </div>

                                <!--end: Form Actions -->
                            </form>

                            <!--end: Form Wizard Form-->
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
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

@stop
