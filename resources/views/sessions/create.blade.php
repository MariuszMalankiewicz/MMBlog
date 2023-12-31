@extends('layouts.master')

@section('content')

<div class="w-full flex flex-col px-4 sm:px-6 lg:px-12 py-4 sm:py-6 md:py-12">

    <h1 class="sm:text-start lg:text-center text-3xl font-semibold text-gray-700">Zaloguj się do konta</h1>

    <hr class="my-10 w-full"> 

    <div class="max-w-4xl lg:mx-auto w-full bg-white">

        <form class="w-full" method="POST" action="{{ route('login.store') }}">
                
            @csrf

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


                <div class="mb-4 space-x-4">
                    <button class="text-sm bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Zaloguj się
                    </button>
                    <a href="/" class="text-sm text-blue-500 hover:underline">Powrót</a>
                </div>

                @include('layouts.errors')
            
        </form>

    </div>

</div>

@endsection