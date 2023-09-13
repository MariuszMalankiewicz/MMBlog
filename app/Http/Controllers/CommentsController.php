<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store()
    {
        Comment::create([
            'body' => request('body'),
            'post_id' => request('post_id')

        ]);

        return back();
    }
}
