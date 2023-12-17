<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        
        return view('home.index', compact('posts'));
    }
}
