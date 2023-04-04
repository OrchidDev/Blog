<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('parent')->paginate();
        $categoriesp = Category::where('category_id', null)->get();
        return view('admin.categories.index', compact('categories', 'categoriesp'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        Category::create(
            $request->validated()
        );

        $notification = array(
            'message' => 'دسته جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categoriese = Category::where('category_id', null)->where('id', '!=', $category->id)->get();
        return view('admin.categories.edit', compact('category', 'categoriese'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update(
            $request->validated()
        );

        $notification = array(
            'message' => 'دسته با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return redirect()->route('categories.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        $notification = array(
            'message' => 'دسته با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
