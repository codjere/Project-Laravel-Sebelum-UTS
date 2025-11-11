<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug) {
    $post = \App\Models\Post::with('writer','category')->where('slug',$slug)->firstOrFail();
    return view('post.show', compact('post'));
    }

}
