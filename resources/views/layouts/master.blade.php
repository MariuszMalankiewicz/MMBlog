<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden">

    @include('layouts.nav')

    @include('layouts.heading')

    <div class="min-h-screen my-6 flex flex-row">

        <div class="w-full mx-4 lg:2/3">

            @yield('content')

        </div>

        <div class="hidden lg:mx-4 lg:text-center lg:w-1/3 lg:block">

            @include('layouts.aside')

        </div>

    </div>

    @include('layouts.footer')

</body>
</html>