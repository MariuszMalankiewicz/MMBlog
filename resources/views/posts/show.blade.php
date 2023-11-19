@extends('layouts.master')

@section('content')

<div class="min-h-screen flex flex-col items-center justify-center w-full">

    <div class="max-w-4xl w-full px-10 my-4 py-6 mx-auto">
        <div>
            <span class="font-light text-gray-600">{{ $post->created_at->diffForHumans();  }}</span>
        </div>
        <div class="mt-2">
            <h1 class="text-2xl text-gray-700 font-bold hover:text-gray-600">{{ $post->title }}</h1>
            <p class="mt-2 text-gray-600">{{ $post->body }}</p>
        </div>
        <div class="flex justify-between items-center mt-4">
            <a class="text-blue-600 hover:underline" href="/">Wróć</a>
            <div>
                <h1 class="text-gray-700 font-bold">{{ $post->user->name }}</h1>
            </div>
        </div>
    </div>

    <hr class="my-10">
    @if (Auth::check())
        @include('comments.create')    
    @endif
    

    <div>
        <h1 class="text-center text-gray-700 font-bold">Komentarze</h1>
    </div>

    @include('comments.index')

</div>


@endsection


