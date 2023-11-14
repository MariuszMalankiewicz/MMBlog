@extends('layouts.master')



@section('content')

    <div class="min-h-screen flex flex-col items-center justify-center w-full">

        @foreach ($posts as $post)

            <div class="max-w-4xl w-full px-10 my-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                <div>
                    <span class="font-light text-gray-600">{{ $post->created_at->diffForHumans(); }}</span>
                </div>
                <div class="mt-2">
                    <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">{{ $post->title }}</a>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <a class="text-blue-600 hover:underline" href="/post/{{$post->id}}">Zobacz</a>
                    <div>
                        <a class="flex items-center" href="#">
                            <h1 class="text-gray-700 font-bold">{{ $post->user->name }}</h1>
                        </a>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endsection


