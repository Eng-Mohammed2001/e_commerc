@extends('site.master')
@section('title', 'Posts | ' . config('app.name'))

@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">
                            Posts API </h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('site.index') }}">Home</a></li>
                            <li class="active">Posts API</li>


                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block">
                            {{-- @foreach ($posts as $post)
                                <h2>{{ $post['title'] }}</h2>
                                <p>{{ $post['body'] }}</p>
                                <hr>
                            @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        // $.ajax({
        //     type: 'get',
        //     url: 'https://jsonplaceholder.typicode.com/posts',
        //     success: function(res) {

        //         res.forEach(post => {
        //             let item = `
    //             <h2>${post.title}</h2>
    //             <p>${post.body}</p>
    //             <hr>`;

        //             $('.block').append(item);
        //         })
        //     }
        // });
        axios.get('https://jsonplaceholder.typicode.com/posts')
            .then(function(response) {
                // handle success

                response.data.forEach(post => {
                    let item = `
                    <h2>${post.title}</h2>
                    <p>${post.body}</p>
                    <hr>`;

                    $('.block').append(item);
                })
            })
            .catch(function(error) {
                console.log(error);
            });
    </script>
@stop
