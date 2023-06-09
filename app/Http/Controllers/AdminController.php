<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users_count = User::count();
        $categories_count = Category::count();
        $posts_count = Post::count();
        $comments_count = Comment::count();

        if (auth()->user()->role === 'author') {

            $posts_count = Post::where('user_id', auth()->user()->id)->count();
            $comments_count = Comment::whereHas('post', function($query) {
                return $query->where('user_id', auth()->user()->id);
            })->count();
        }

        return view('admin.index', compact(
            'users_count',
            'posts_count',
            'categories_count',
            'comments_count'
        ));
    }
}
