<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
    $categories = \App\Models\Category::all();
    return view('category.index', compact('categories'));
    }
    public function show($slug) {
        $category = \App\Models\Category::where('slug',$slug)->firstOrFail();
        $posts = $category->posts()->with('writer')->paginate(6);
        return view('category.show', compact('category','posts'));
    }

}
