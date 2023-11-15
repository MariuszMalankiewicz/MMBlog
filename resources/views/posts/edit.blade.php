@extends('layouts.master')

@section('content')

<div class="min-h-screen flex items-center justify-center w-full">

    <div class="max-w-4xl w-full px-10 my-14 py-6 mx-auto bg-white rounded-lg shadow-md">

        <form class="w-full" method="POST" action="/post/{{$post->id}}">
                
            @csrf

                <div class="mb-4 text-center">
                    <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-blue-600 md:text-4xl lg:text-5xl dark:text-blue-600">Edytuj post</h1>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Tytuł
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="title" type="text" value="{{$post->title}}">
                </div>


                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                        Treść
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="body" type="text">{{$post->body}}</textarea>
                </div>

                <div class="mb-4">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Edytuj
                    </button>
                    <a href="/" class="ml-4 text-gray-700">Powrót</a>
                </div>

                @include('layouts.errors')
            
        </form>

    </div>

</div>

@endsection