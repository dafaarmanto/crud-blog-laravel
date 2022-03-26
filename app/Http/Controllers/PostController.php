<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('blog', [
            "title" => 'Blog',
            "post" => $post,
            "posts" => Post::latest()->filter(['search', 'category'])->get(),
            "categories" => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => 'Single Blog Page',
            "post" => $post
        ]);
    }
}
