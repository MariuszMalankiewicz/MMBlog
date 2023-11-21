@extends('layouts.master')



@section('content')

    <div class="min-h-screen flex flex-col items-center justify-center w-full">
        <div class="flex flex-col sm:flex-row justify-center items-center space-y-10 sm:space-y-0 sm:space-x-10 my-10">
            <a href="/posts">
                <div class="relative overflow-hidden h-96 w-72 lg:w-80 flex justify-center items-center rounded-2xl shadow-xl hover:shadow-2xl bg-opacity-90 bg-blue-400 hover:bg-blue-500 hover:rotate-1 duration-300">
                    <p class="font-bold text-xl text-slate-100 duration-300 cursor-pointer z-10">Zarządzaj Postami</p>
                    <div class="absolute top-30 left-40 w-72 h-72 border-blue-300 border-18 rounded-3xl rotate-12 z-0"></div>
                </div>
            </a>
    
            <a href="#">
                <div class="relative overflow-hidden h-96 w-72 lg:w-80 flex justify-center items-center rounded-2xl shadow-xl hover:shadow-2xl bg-yellow-300 hover:bg-yellow-400 hover:-rotate-1 duration-300">
                    <p class="font-bold text-xl text-white duration-300 cursor-pointer z-10">Zarządzaj Komentarzami</p>
                    <div class="absolute top-30 left-40 w-72 h-72 border-yellow-200 border-18 rounded-3xl -rotate-12 z-0"></div>
                </div>
            </a>
        </div>
    </div>

@endsection


