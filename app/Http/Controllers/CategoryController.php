<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('all_categories');
        $categories = Category::with('parent')->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('add_category');
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('add_category');
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'parent_id' => 'nullable | exists:categories,id',
            'description' => 'required | min:150'
        ]);

        $img_name = rand() . rand() . rand() . time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/categories'), $img_name);
        // dd($img_name);
        Category::create([
            'name' => $request->name,
            'image' => $img_name,
            'parent_id' => $request->parent_id,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.categories.index')->with('msg', 'Category Created Successfully')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        Gate::authorize('single_category');


        // $categories = Category::all();
        $category = Category::findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        Gate::authorize('edit_category');

        $categories = Category::all();
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Gate::authorize('edit_category');

        $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'parent_id' => 'nullable | exists:categories,id',
            'description' => 'required | min:150'
        ]);

        $category = Category::findOrFail($id);

        $img_name = $category->image;
        if ($request->hasFile('image')) {
            $img_name = rand() . rand() . rand() . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/categories'), $img_name);
        }
        $category->update([
            'name' => $request->name,
            'image' => $img_name,
            'parent_id' => $request->parent_id,
            'description' => $request->description,
        ]);
        // dd($request->all);
        return redirect()->route('admin.categories.index')->with('msg', 'Category Updated Successfully')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gate::authorize('delete_category');
        $category = Category::findOrFail($id);
        File::delete(public_path('uploads/categories/' . $category->image));
        $category->children()->update(['parent_id' => null]);
        $category->delete();
        return redirect()->route('admin.categories.index')->with('msg', 'Category deleted successfully')->with('type', 'success');
    }
}
