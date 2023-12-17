@extends('layouts.master')

@section('content')

<div class="flex items-center justify-center w-full px-4 sm:px-6">

    <div class="max-w-3xl w-full px-10 my-14 py-6 mx-auto bg-white rounded-lg shadow-md">

        <form class="w-full" method="POST" action="{{ route('posts.store') }}">
                
            @csrf

                <div class="mb-4 text-center">
                    <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-blue-600 md:text-4xl lg:text-5xl dark:text-blue-600">Dodaj post</h1>
                </div>
                

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Tytuł
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="title" type="text">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                        Treść
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="body" type="text"></textarea>
                </div>

                <div class="mb-4 space-x-4">
                    <button class="text-sm bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Publikuj
                    </button>
                    <a href="/posts" class="text-sm text-blue-600 hover:underline">Powrót</a>
                </div>

                @include('layouts.errors')
            
        </form>

    </div>

</div>

@endsection