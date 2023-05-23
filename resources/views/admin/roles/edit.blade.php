@extends('admin.master')


@section('title', 'Create Role | ' . config('app.name'))
@section('styles')
    <link href="{{ asset('dashbord/assets/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />
    <style>
        ul.ul-2 {
            column-count: 2;
        }
    </style>

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
                        Create New Role
                    </h3>
                </div>
            </div>


            <!-- begin:: Content -->
            <div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="first">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-grid">
                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                            <!--begin: Form Wizard Form-->
                            <form class="kt-form" method="POST" action="{{ route('admin.roles.update', $role->id) }}">
                                @csrf
                                @method('put')
                                @if ($errors->any())
                                    <div style="margin: auto" class="alert alert-danger col-lg-12 col-xl-12">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                @endif
                                <!--begin: Form Wizard Step 1-->
                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                                    data-ktwizard-state="current">
                                    <div class="kt-section kt-section--first">
                                        <div class="kt-wizard-v4__form">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="kt-section__body">

                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Role
                                                                Name</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control" type="text" name="name"
                                                                    placeholder="Role Name" value="{{ $role->name }}">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <ul class="col-xl-12 col-lg-12 ul-2">

                                                        @foreach ($permissions as $permission)
                                                            <div class="col-xl-6 col-lg-6" style="display: flex">
                                                                <div class="kt-widget2__checkbox">
                                                                    <label
                                                                        class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                                                                        <input
                                                                            {{ $role->permissions->find($permission->id) ? 'checked' : '' }}
                                                                            value="{{ $permission->id }}"
                                                                            name="permission[]" type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                                <div style="min-width: 250px; !important"
                                                                    class="kt-widget2__info">
                                                                    <label>{{ $permission->name }}</label>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end: Form Wizard Step 1-->
                                <!--begin: Form Actions -->
                                <div class="kt-form__actions">

                                    <button class="btn btn-brand btn-icon-sm">Update</button>
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
