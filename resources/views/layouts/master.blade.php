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
    <div class="flex flex-col justify-between min-h-screen">
        <div>
            @include('layouts.nav')

        @include('layouts.heading')
        </div>

        <div data-blur class="my-6 flex">

            <div class="w-full">

                @yield('content')

            </div>

        </div>

        @include('layouts.footer')

    </div>

</body>
</html>