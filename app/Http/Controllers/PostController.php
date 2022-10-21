<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function web() {
        $posts = Post::latest()->get();
        return view('web')
            ->with(['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show')
            ->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ],
        [
            'title.required' => '本文を入力してください',
            'title.min' => ':min文字以上入力してください',
            'body.required' => '本文を入力してください',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()
            ->route('posts.web');
    }
}
