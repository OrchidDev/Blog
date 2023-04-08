<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        if(isset($request->approved)) {
            $comments = Comment::where('is_approved', !! $request->approved)->with(['user', 'post'])->withCount('replies')->paginate();
        } else {
            $comments = Comment::with(['user', 'post'])->withCount('replies')->paginate();
        }
        return view('admin.comments.index', compact('comments'));
    }

    public function update(Comment $comment)
    {
        $comment->update([
            'is_approved' => ! $comment->is_approved
        ]);

        $notification = array(
            'message' => 'نظر با موفقیت به روز شد.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        $notification = array(
            'message' => 'نظر با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
