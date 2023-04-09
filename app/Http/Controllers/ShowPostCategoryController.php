<?php

namespace App\Http\Controllers;

use App\Models\Category;
class ShowPostCategoryController extends Controller
{
    public function show(Category $category)
    {
        $posts = $category->posts()->paginate();

        return view('home.index', compact('posts'));
    }
}
