@extends('layouts.master')



@section('content')

    <div class="min-h-screen w-full flex flex-col items-center justify-center">

      <h1 class="text-3xl sm:text-4xl md:text-5xl font-black text-gray-800 mb-14 sm:mb-16 md:mb-20 lg:mb-24 xl:mb-28 text-center">Zarządzaj Postami</h1>


      {{-- desktop --}}
      <div class="w-full text-center overflow-x-auto whitespace-nowrap lg:px-5 xl:px-10">
        <table class="shadow-md w-full">
          <thead>
            <tr>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">#</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Tytuł</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Utworzono</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Aktualizacja</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Akcje</th>
            </tr>
          </thead>
              @foreach ($posts as $post)
                      <tbody>
                      <tr class="bg-white hover:bg-blue-100 duration-200">
                          <td class="px-5 py-5 text-sm font-bold">{{ $post->id }}</td>
                          <td class="px-5 py-5 text-sm font-semibold">{{ $post->title }}</td>
                          <td class="px-5 py-5 text-sm">{{ $post->created_at }}</td>
                          <td class="px-5 py-5 text-sm">{{ $post->updated_at }}</td>
                          <td class="text-center space-x-5 pe-5">
                            <a href="#" class="text-sm font-semibold text-blue-600 hover:underline">Zobacz</a>
                            <a href="#" class="text-sm font-semibold text-blue-600 hover:underline">Edytuj</a>
                            <a href="#" class="text-sm font-semibold text-blue-600 hover:underline">Usuń</a>
                          </td>
                      </tr>
                      </tbody>
              @endforeach
        </table>
      </div>
    </div>

@endsection


