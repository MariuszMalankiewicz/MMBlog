@extends('layouts.master')

@section('content')

    <div class="max-w-4xl px-10 my-4 py-6 mx-auto">
        <div>
            <span class="font-light text-gray-600">{{ $post->created_at->diffForHumans();  }}</span>
        </div>
        <div class="mt-2">
            <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">{{ $post->title }}</a>
            <p class="mt-2 text-gray-600">{{ $post->body }}</p>
        </div>
        <div class="flex justify-between items-center mt-4">
            <a class="text-blue-600 hover:underline" href="/">Wróć</a>
            <div>
                <a class="flex items-center" href="#">
                    <h1 class="text-gray-700 font-bold">{{ $post->user->name }}</h1>
                </a>
            </div>
        </div>
    </div>

    <hr class="my-10">

    @include('comments.create')

    <div>
        <h1 class="text-center text-gray-700 font-bold">Komentarze</h1>
    </div>

    @include('comments.index')


@endsection


