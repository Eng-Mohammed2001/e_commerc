@extends('site.master')
@section('title', 'Search | ' . config('app.name'))

@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('site.search') }}" method="GET" ">
                            <input type="search" name="title" class="form-control" value="{{ request()->title }}"
                            placeholder="Search...">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="products section">
            <div class="container">
                <div class="row">
                     @foreach ($courses as $course)
                        <div class="col-md-4">
                            @include('site.includes.courses')
                        </div>
                        @endforeach
                </div>
                {{ $courses->links() }}
            </div>
    </section>
@stop
