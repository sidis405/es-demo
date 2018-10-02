<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }

    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $post->load('category', 'user');
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }
}
