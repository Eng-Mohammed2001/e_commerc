@extends('site.master')
@section('title', 'Shop | ' . config('app.name'))

@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">
                            {{ isset($category) ? $category->name : 'Shop' }}
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('site.index') }}">Home</a></li>
                            @if (isset($category))
                                <li><a href="{{ route('site.shop') }}">Shop</a></li>
                            @else
                                <li class="active">Shop</li>
                            @endif


                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="products section">
        <div class="container">
            <div class="row">
                @foreach ($courses as $course)
                    <div  class="col-md-4">
                        @include('site.includes.courses')
                    </div>
                @endforeach
            </div>
            {{ $courses->links() }}
        </div>
    </section>
@stop
