<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function posts()
    {
        // $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        // return view('site.posts_api', compact('posts'));
        return view('site.posts_api');
        // dd($posts);
    }
}
