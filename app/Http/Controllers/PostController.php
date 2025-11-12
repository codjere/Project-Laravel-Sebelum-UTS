<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // 🧾 Tampilkan semua post
    public function index()
    {
        $posts = Post::with('writer', 'category')->get();
        return view('post.index', compact('posts'));
    }

    // 📰 Tampilkan 1 post berdasarkan slug
    public function show($slug)
    {
        $post = Post::with('writer','category')->where('slug', $slug)->firstOrFail();
        return view('post.show', compact('post'));
    }
}
