<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    $latestPosts = \App\Models\Post::with('writer','category')->orderBy('published_at','desc')->take(6)->get();
    return view('home', compact('latestPosts'));
    }
    public function writers() {
        $writers = \App\Models\Writer::all();
        return view('writers', compact('writers'));
    }

}
