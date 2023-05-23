<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Backtrace\File;
use ZipArchive;

class SiteController extends Controller
{
    public function index()
    {


        $courses_slider = Course::orderByDesc('id')->take(3)->get();
        $categories = Category::orderByDesc('id')->take(3)->get();
        $courses_latest = Course::orderByDesc('id')->take('9')->offset('3')->get();
        return view('site.index', compact('courses_slider', 'categories', 'courses_latest'));
    }
    public function about()
    {
        return view('site.about');
    }
    public function shop()
    {
        $courses = Course::orderByDesc('id')->paginate(9);
        return view('site.shop', compact('courses'));
    }
    public function category($id)
    {

        $category = Category::FindOrFail($id);
        $courses = $category->courses()->orderByDesc('id')->paginate(9);
        return view('site.shop', compact('courses', 'category'));
    }
    public function contact()
    {
        // $courses = Course::orderByDesc('id')->paginate(9);
        return view('site.contact');
    }

    public function search(Request $request)
    {
        $courses = Course::orderByDesc('id')->where('title', 'like', '%' . $request->title . '%')->paginate(9);
        return view('site.search', compact('courses'));
    }
    public function course($slug)
    {
        $course = Course::where('slug', $slug)->first();
        if (!$course) {
            abort(404);
        }
        $next = Course::where('id', '>', $course->id)->first();
        $prev = Course::where('id', '<', $course->id)->orderByDesc('id')->first();
        $related = Course::where('category_id', $course->category_id)->where('id', '!=', $course->id)->get();
        return view('site.course', compact('course', 'next', 'prev', 'related'));
    }

    public function course_review(Request $request)
    {
        Review::create([
            'comment' => $request->comment,
            'star' => $request->rating,
            'course_id' => $request->course_id,
            'user_id' => Auth::id(),
        ]);
        return redirect()->back();
    }
}
