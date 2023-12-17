@extends('layouts.master')

@section('content')

<div class="flex flex-col items-center justify-center w-full">

    <div class="max-w-4xl w-full px-10 my-10 py-6 mx-auto">
        <div>
            <span class="font-light text-gray-600">{{ $post->created_at->diffForHumans();  }}</span>
        </div>
        <div class="mt-2">
            <h1 class="text-2xl text-gray-700 font-bold hover:text-gray-600">{{ $post->title }}</h1>
            <p class="mt-2 text-gray-600">{{ $post->body }}</p>
        </div>
        <hr class="my-10">

    </div>

    <hr>
    
    @include('layouts/sessions/success')
    
    @if (Auth::check())
        <div class="w-full px-4 sm:px-6">
            @include('comments.create')
        </div>
    @endif
    

    <div>
        <h1 class="text-center text-gray-700 font-bold">Komentarze</h1>
    </div>

    @include('comments.index')

</div>


@endsection


