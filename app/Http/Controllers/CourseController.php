<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('all_courses');

        $courses = Course::with('category')->get();

        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        Gate::authorize('add_course');
        $categories = Category::all();
        $course = new Course();
        return view('admin.courses.create', compact('categories', 'course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('add_course');
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'owner' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        $img_name = rand() . rand() . rand() . time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/courses'), $img_name);


        $slugcount = Course::where('slug', 'like', '%' . Str::slug($request->title) . '%')->count();
        $slug = Str::slug($request->title);
        if ($slugcount) {
            $slug = Str::slug($request->title) . '-' . $slugcount;
        }

        Course::create([
            'slug' => $slug,
            'image' => $img_name,
            'title' => $request->title,
            'owner' => $request->owner,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'category_id' => $request->category_id,


        ]);

        return redirect()->route('admin.courses.index')->with('msg', 'Course Created Successfully')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Gate::authorize('single_course');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        Gate::authorize('edit_course');


        $categories = Category::all();
        $course = Course::findOrFail($id);
        return view('admin.courses.edit', compact('categories', 'course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gate::authorize('edit_course');

        $request->validate([
            'image' => 'nullable',
            'title' => 'required',
            'owner' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        $course = Course::findOrFail($id);
        $img_name = $course->image;
        if ($request->hasFile('image')) {

            $img_name = rand() . rand() . rand() . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/courses'), $img_name);
        }

        $course->update([

            'image' => $img_name,
            'title' => $request->title,
            'owner' => $request->owner,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'category_id' => $request->category_id,


        ]);

        return redirect()->route('admin.courses.index')->with('msg', 'Course Updated Successfully')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gate::authorize('delete_course');

        $course = Course::findOrFail($id);

        File::delete(public_path('uploads/courses/' . $course->image));
        $course->delete();
        return redirect()->route('admin.courses.index')->with('msg', 'Course deleted successfully')->with('type', 'success');
    }
}
