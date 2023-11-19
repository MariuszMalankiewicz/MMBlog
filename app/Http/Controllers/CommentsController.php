<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store()
    {
        Comment::create([
            'body' => request('body'),
            'post_id' => request('post_id'),
            'user_id' => Auth::user()->id

        ]);

        return back();
    }

    public function edit(string $id)
    {
        $comment = Comment::findOrFail($id);

        return view('comments.edit', compact('comment'));
    } 

    public function update(string $id)
    {
        Comment::where('id', $id)->update([
            'body' => request('body'),
        ]);

        return redirect('/');
    }

    public function destroy(string $id)
    {
        Comment::where('id', $id)->delete();

        return redirect('/');
    }
}
