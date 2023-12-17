@extends('layouts.master')



@section('content')

    <div class="flex flex-col items-center justify-center w-full">
        <div class="flex flex-wrap flex-col sm:flex-row justify-center items-center space-y-10 lg:space-y-0 sm:space-x-10 my-10">

            @if(Auth::check() && Auth::user()->role === 'superAdmin')            
                <a href="{{ route('users.index') }}">
                    <div class="relative overflow-hidden h-96 w-72 lg:w-80 flex justify-center items-center rounded-2xl shadow-xl hover:shadow-2xl bg-green-300 hover:bg-green-400 hover:-rotate-1 duration-300">
                        <p class="font-bold text-xl text-white duration-300 cursor-pointer z-10">Zarządzaj Użytkownikami</p>
                        <div class="absolute top-30 left-40 w-72 h-72 border-green-200 border-18 rounded-3xl rotate-12 z-0"></div>
                    </div>
                </a>
            @endif

            @if(Auth::check() && Auth::user()->role === 'admin' || Auth::check() && Auth::user()->role === 'superAdmin') 
                <a href="{{ route('posts.index') }}">
                    <div class="relative overflow-hidden h-96 w-72 lg:w-80 flex justify-center items-center rounded-2xl shadow-xl hover:shadow-2xl bg-opacity-90 bg-blue-400 hover:bg-blue-500 hover:rotate-1 duration-300">
                        <p class="font-bold text-xl text-slate-100 duration-300 cursor-pointer z-10">Zarządzaj Postami</p>
                        <div class="absolute top-30 left-40 w-72 h-72 border-blue-300 border-18 rounded-3xl rotate-45 z-0"></div>
                    </div>
                </a>
            @endif
        </div>
    </div>

@endsection


