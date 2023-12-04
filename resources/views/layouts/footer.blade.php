<footer class="bg-white rounded-t-lg shadow dark:bg-gray-900">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="flex items-center justify-between">

            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">MMBlog<span class="w-1.5 h-8 ml-0.5 align-middle bg-blue-500 inline-block"></span></span>
            <div class="space-x-2 hidden sm:flex sm:px-2">
                <span class="text-xs md:text-sm text-gray-500">Przejdz do:</span>
                <a class="text-xs md:text-sm text-white hover:underline" href="/">Strona główna</a>
                @if(Auth::check() && Auth::user()->role === 'admin' || Auth::check() && Auth::user()->role === 'superAdmin') 
                    <span class="text-xs md:text-sm text-gray-500">|</span>
                    <a class="text-xs md:text-sm text-white hover:underline" href="/posts">Zarządzaj postami</a>
                    @if(Auth::check() && Auth::user()->role === 'superAdmin')
                        <span class="text-xs md:text-sm text-gray-500">|</span>
                        <a class="text-xs md:text-sm text-white hover:underline" href="/users">Zarządzaj użytkownikami</a>
                    @endif
                @endif
            </div>
            <ul class="flex flex-wrap items-center text-sm font-medium text-gray-500 mb-0 dark:text-gray-400">
                <li>
                    <a href="https://portfolio-mariusz-malankiewicz.netlify.app" target="blank" class="mr-4 hover:underline md:mr-6">Portfolio</a>
                </li>
                <li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm pb-4 text-gray-500 sm:text-center dark:text-gray-400">© 2023 MMBlog. Wszystkie prawa zastrzeżone.</span>
    </div>
</footer>

