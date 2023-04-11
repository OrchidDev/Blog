<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->orderBy('id', 'desc')->paginate(5);
        return view('home.index', compact('posts'));
    }
}
