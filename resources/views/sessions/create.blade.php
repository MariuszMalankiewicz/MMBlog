@extends('layouts.master')

@section('content')

{{-- my-44 --}}
<div class="max-w-4xl my-10 h-800:my-20 h-850:my-28 h-900:my-36 h-1050:my-44 h-1250:my-72 px-10 py-6 mx-auto bg-white rounded-lg shadow-md">

    <form class="w-full" method="POST" action="/login">
            
        @csrf

            <div class="mb-4 text-center">
                <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-blue-600 md:text-4xl lg:text-5xl dark:text-blue-600">Zaloguj się</h1>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Hasło
                </label>
                <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" required>
            </div>


            <div class="mb-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Zaloguj się
                </button>
                <a href="/" class="ml-4 text-gray-700">Powrót</a>
            </div>

            @include('layouts.errors')
          
      </form>

</div>

@endsection