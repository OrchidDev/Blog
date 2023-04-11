<?php

namespace App\Http\View\Composers;

use App\Models\Post;
use Illuminate\View\View;

class PostComposer
{
    public function __construct()
    {
        $this->posts = Post::orderBy('id', 'desc')->get();
    }

    public function compose(View $view)
    {
        $view->with('posts', $this->posts);
    }
}
