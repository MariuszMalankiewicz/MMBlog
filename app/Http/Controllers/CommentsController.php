<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('check');
    }

    public function store(StoreCommentRequest $request)
    {
        Comment::create([
            'body' => $request->body,
            'post_id' => $request->post_id,
            'user_id' => Auth::user()->id
        ]);

        return back()->with('success', 'Komentarz został dodany');
    }

    public function edit(Post $post, Comment $comment)
    {
        return view('comments.edit', compact('post', 'comment'));
    } 

    public function update(UpdateCommentRequest $request, Post $post, Comment $comment)
    {
        $comment->update($request->all());

        return redirect()->route('posts.show', $post->id)->with('success', 'Komentarz został zaktualizowany');
    }

    public function destroy(Post $post, Comment $comment)
    {
        $comment->delete();

        return back()->with('success', 'Komentarz został usunięty');
    }
}
