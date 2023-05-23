<?php

namespace App\Http\Controllers\API;

use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $courses = Course::all();

        if ($courses->count() > 0) {

            return response()->json([
                'message' => 'All Courses',
                'status' => 'Success',
                'data' => $courses
            ], 201);
        } else {
            return response()->json([
                'message' => 'No Data Found',
                'status' => 'Success',
                'data' => []
            ], 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $course = Course::create(['']);
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


        $course =  Course::create([
            'slug' => $slug,
            'image' => $img_name,
            'title' => $request->title,
            'owner' => $request->owner,
            'description' => $request->description,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'category_id' => $request->category_id,
        ]);
        return $course;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::find($id);

        if ($course) {

            return response()->join([
                'message' => 'Found Data',
                'status' => 'Success',
                'data' => $course
            ], 201);
        } else {
            return response()->json([
                'message' => 'No Data Found',
                'status' => 'Success',
                'data' => []
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {



        $course = Course::findOrFail($id);
        $img_name = $course->image;
        if ($request->hasFile('image')) {
            $img_name = rand() . rand() . rand() . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/courses'), $img_name);
        }

        return $course->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $course = Course::findOrFail($id);
        File::delete(public_path('uploads/courses/' . $course->image));
        return $course->delete();
    }
}
