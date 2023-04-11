<?php

namespace App\Http\View\Composers;

use App\Models\Comment;
use Illuminate\View\View;

class CommentComposer
{
    public function __construct()
    {
        $this->comments = Comment::all();
    }

    public function compose(View $view)
    {
        $view->with('comments', $this->comments);
    }
}
