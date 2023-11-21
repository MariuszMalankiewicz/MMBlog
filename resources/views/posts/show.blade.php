@extends('layouts.master')

@section('content')

<div class="min-h-screen flex flex-col items-center justify-center w-full">

    <div class="max-w-4xl w-full px-10 my-10 py-6 mx-auto">
        <div>
            <span class="font-light text-gray-600">{{ $post->created_at->diffForHumans();  }}</span>
        </div>
        <div class="mt-2">
            <h1 class="text-2xl text-gray-700 font-bold hover:text-gray-600">{{ $post->title }}</h1>
            <p class="mt-2 text-gray-600">{{ $post->body }}</p>
        </div>
        <hr class="my-10">
        <div class="flex justify-start items-center">
            <div class="space-x-2">
                <span class="text-sm text-gray-500">Przejdz do:</span>
                <a class="text-sm text-blue-600 hover:underline" href="/">Strona główna</a>
                @can('auth_user_id_post_user_id', $post) 
                    <span class="text-sm text-gray-500">|</span>
                    <a class="text-sm text-blue-600 hover:underline" href="/posts">Zarządzaj postami</a>
                @endcan
            </div>
        </div>
    </div>

    <hr>
    @if (Auth::check())
        @include('comments.create')
    @endif
    

    <div>
        <h1 class="text-center text-gray-700 font-bold">Komentarze</h1>
    </div>

    @include('comments.index')

</div>


@endsection


