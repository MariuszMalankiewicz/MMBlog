@extends('layouts.master')



@section('content')
    <div class="w-full flex flex-col items-center justify-center my-4 space-y-5 px-3 sm:px-5 xl:px-14">

        <div class="flex flex-col justify-start w-full items-start space-y-2 px-2">
            <h1 class="text-gray-500">Nazwa: <span class="font-bold text-gray-900">{{$user->name}}</span></h1>
            <p class="text-gray-500">E-mail: <span class="font-semibold text-gray-900">{{$user->email}}</span></p>
            <p class="text-gray-500">Rola <span class="bg-blue-300 py-1 px-2 rounded-md text-white font-bold">{{$user->role}}</span></p>
        </div>
      
      <div class="w-full">
        <div class="shadow px-6 py-6 rounded-3xl w-56">
          <p class="text-gray-500 text-sm">Liczba postów</p>
          <p class="text-gray-900 text-2xl font-bold ms-1">{{ count($user->posts) }}</p>
        </div>
      </div>


      <div class="flex flex-col sm:flex-row space-y-14 sm:space-y-0 mt-8 sm:my-18 sm:justify-between items-center w-full mb-8">
        <h1 class="text-center text-4xl md:text-6xl font-black text-gray-800">Lista postów</h1>
      </div>
    
      <div class="w-full text-center overflow-x-auto sm:mb-12 whitespace-nowrap">
        <table class="w-full">
          <thead>
            <tr>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">#</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Nazwa</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Utworzono</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Aktualizacja</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Akcje</th>
            </tr>
          </thead>
              @foreach ( $user->posts as $post)
                <tbody>
                    <tr class="bg-white hover:bg-slate-100 duration-200">
                    <td class="px-5 py-5 text-sm font-bold">{{ $post->id }}</td>
                    <td class="px-5 py-5 text-sm font-semibold">{{ $post->title }}</td>
                    <td class="px-5 py-5 text-sm">{{ $post->created_at }}</td>
                    <td class="px-5 py-5 text-sm">{{ $post->updated_at }}</td>
                    <td class="text-center space-x-5 pe-5">
                        <a href="/post/{{ $post->id }}" class="text-sm font-semibold text-blue-600 hover:underline">Podgląd</a>
                        <a href="/post/{{ $post->id }}/edit" class="text-sm font-semibold text-blue-600 hover:underline">Edytuj</a>
                        <a href="/posts/{{ $post->id }}" class="text-sm font-semibold text-blue-600 hover:underline">Usuń</a>
                    </td>
                    </tr>
                </tbody>
              @endforeach
        </table>
      </div>

    </div>

@endsection


