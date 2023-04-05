<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(auth()->user()->role === 'author') {
            $postsQuery = Post::where('user_id', auth()->user()->id)->with('user');

            if ($request->search) {
                $postsQuery->where('title', 'LIKE', "%{$request->search}%");
            }

            $posts = $postsQuery->paginate();
        } else {
            $postsQuery = Post::with('user');

            if ($request->search) {
                $postsQuery->where('title', 'LIKE', "%{$request->search}%");
            }

            $posts = $postsQuery->paginate(1);
        }
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'string'],
            'pic' => ['required', 'image'],
            'content' => ['required']
        ]);

        if ($request->file('pic')) {
            $data['pic'] = Storage::putFile('postpic',
            $request->file('pic'));
        }

        $data['user_id'] = auth()->user()->id;

        Post::create($data);

        $notification = array(
            'message' => 'نوشته جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return redirect()->route('posts.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'string'],
            'pic' => ['required', 'image'],
            'content' => ['required']
        ]);

        if ($request->file('pic')) {
            $data['pic'] = Storage::putFile('postpic',
                $request->file('pic'));
        }

        $data['user_id'] = auth()->user()->id;

        $post->update($data);

        $notification = array(
            'message' => 'نوشته با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return redirect()->route('posts.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
