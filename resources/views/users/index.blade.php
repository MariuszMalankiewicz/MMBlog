@extends('layouts.master')



@section('content')
    <div class="w-full flex flex-col items-center justify-center my-4">

      <div class="w-full px-3 sm:px-5 xl:px-14 py-4">
        <div class="shadow px-6 py-6 rounded-3xl w-56">
          <p class="text-gray-500 text-sm">Liczba użytkowników</p>
          <p class="text-gray-900 text-2xl font-bold ms-1">{{count($users)}}</p>
        </div>
      </div>

      <div class="flex flex-col sm:flex-row space-y-14 sm:space-y-0 mt-8 sm:my-18 sm:justify-between items-center w-full sm:px-5 xl:px-14 mb-8">

        <h1 class="text-center text-4xl md:text-6xl font-black text-gray-800">Zarządzaj Użytkownikami</h1>

        <a href="/users/create" class="flex items-center min-w-max space-x-2 px-8 py-4 shadow-2xl rotate-1 hover:rotate-2 rounded-md bg-slate-10 text-gray-600 hover:text-gray-800 border-b-4 hover:border-blue-500 duration-200">
          <p class="text-xl md:text-2xl font-bold">Dodaj Użytkownika</p>
          <svg class="fill-blue-600 text-2xl md:text-3xl" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
        </a>
      </div>

      <div class="w-full text-center overflow-x-auto sm:mb-12 whitespace-nowrap lg:px-5 xl:px-10">
        <table class="w-full">
          <thead>
            <tr>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">#</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Nazwa</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Email</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Rola</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Utworzono</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Aktualizacja</th>
              <th class="px-5 py-5 bg-blue-400 bg-opacity-90 text-slate-100">Akcje</th>
            </tr>
          </thead>
              @foreach ($users as $user)
                <tbody>
                    <tr class="bg-white hover:bg-slate-100 duration-200">
                    <td class="px-5 py-5 text-sm font-bold">{{ $user->id }}</td>
                    <td class="px-5 py-5 text-sm font-semibold">{{ $user->name }}</td>
                    <td class="px-5 py-5 text-sm font-semibold">{{ $user->email }}</td>
                    <td class="px-5 py-5 text-sm font-semibold"><span class="bg-blue-300 py-1 px-2 rounded-md text-white">{{ $user->role }}</span></td>
                    <td class="px-5 py-5 text-sm">{{ $user->created_at }}</td>
                    <td class="px-5 py-5 text-sm">{{ $user->updated_at }}</td>
                    <td class="text-center space-x-5 pe-5">
                        <a href="/users/{{ $user->id }}" class="text-sm font-semibold text-blue-600 hover:underline">Podgląd</a>
                        <a href="/user/{{ $user->id }}/edit" class="text-sm font-semibold text-blue-600 hover:underline">Edytuj</a>
                        <a href="/users/{{ $user->id }}" class="text-sm font-semibold text-blue-600 hover:underline">Usuń</a>
                    </td>
                    </tr>
                </tbody>
              @endforeach
        </table>
      </div>
    </div>

@endsection


