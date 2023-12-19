<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);

        return view('home.index', compact('posts'));
    }
}
