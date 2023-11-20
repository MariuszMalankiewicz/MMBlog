<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MMBlog</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="overflow-x-hidden">

    @include('layouts.nav')

    @include('layouts.heading')

    <div data-blur class="my-6 flex">

        <div class="w-full mx-4">

            @yield('content')

        </div>

        {{-- <div class="hidden lg:mx-4 lg:text-center lg:w-1/3 lg:block">

            @include('layouts.aside')

        </div> --}}

    </div>

    @include('layouts.footer')

</body>
</html>