<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();

        // $posts = $posts->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $this->validate(request(), [
            'title'  => 'required|min:2',
            'body'  => 'required|min:2',
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
            
        ]);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post, string $id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        $this->validate(request(), [
            'title'  => 'required|min:2',
            'body'  => 'required|min:2',
        ]);


        Post::where('id', $request->id)
            ->update([
                'title' => $request->title,
                'body' => $request->body
            ]);
        
        return redirect('/'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post, string $id)
    {
        Post::find($id)->delete();

        return redirect('/');
    }
}
