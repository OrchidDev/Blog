<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CommentStoreRequest;
use App\Models\Comment;

class CommentSingleController extends Controller
{
    public function store(CommentStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;

        Comment::create($data);

        return back()->with('success','نظر با موفقیت ثبت شد. پس از تایید توسط مدیریت نظر شما در سایت نمایش داده خواهد شد.');
    }
}
