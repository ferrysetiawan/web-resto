<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::publish()->paginate(8);
        return view('news.index', compact('posts'));
    }
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('news.detail', compact('post'));
    }
}
