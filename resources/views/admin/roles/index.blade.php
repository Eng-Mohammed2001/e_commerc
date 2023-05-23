@extends('admin.master')


@section('title', 'Rolse | ' . config('app.name'))
@section('styles')
    {{-- <style>
        .order::after {
            display: none !important;
        }

        .order::before {
            display: none !important;
        }

        .order:hover {
            cursor: default !important;
        }
    </style> --}}

@stop
@section('content')



    <div class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="fas fa-star-half-alt fa-lg" style="color: #5d78ff;"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        All Roles
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-download"></i> Export
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                            <span class="kt-nav__section-text">Choose an option</span>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-print"></i>
                                                <span class="kt-nav__link-text">Print</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                <span class="kt-nav__link-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                <span class="kt-nav__link-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            &nbsp;
                            <a href="{{ route('admin.roles.create') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i>
                                New Record
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>

                            <th class="order">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td style="text-align: center ; min-width: 110px;max-width: 110px;">
                                    <a href="{{ route('admin.roles.edit', $role->id) }}"
                                        class="btn btn-sm btn-info btn-icon btn-icon-md" title="Edit">
                                        <i class="la la-edit"></i>
                                    </a>
                                    <button title="Delete" class="btn-delete btn btn-sm btn-danger btn-icon btn-icon-md"><i
                                            class="la la-trash"></i></button>
                                    <form style="display: inline"
                                        action="{{ route('admin.roles.destroy', $role->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!--end: Datatable -->
            </div>
        </div>
    </div>

@stop


@section('scripts')
    <script src="{{ asset('dashbord/assets/js/pages/crud/datatables/advanced/footer-callback.js') }}"
        type="text/javascript"></script>

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
