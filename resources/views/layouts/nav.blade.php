<div>
    <section class="relative mx-auto">
        <!-- navbar -->
      <nav class="flex justify-between bg-gray-900 text-white w-screen">
        <div class="px-5 xl:px-12 py-6 flex w-full items-center relative">
          <a class="text-3xl font-bold font-heading" href="/">
            MMBlog<span class="w-2 h-9  ml-0.5 align-middle bg-blue-500 inline-block"><span>
          </a>
        
          {{-- mobile nav --}}
          <svg data-hamburger class="fill-white ml-auto me-10 md:hidden scale-150 cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>

          
          <div data-mobileNavContainer class="z-10 hidden md:hidden bg-gray-900 flex flex-col pt-6 items-center px-4 h-44 w-full font-semibold absolute top-20 right-0">

            <ul class="flex justify-end space-x-5 mb-12 me-10 w-full">
              @if(Auth::check())
                <p>Witaj {{ Auth::user()->name }}</p>
                <a href="/logout">Wyloguj</a>
              @endif
            
              @if(!Auth::check())
                <a href="/register">Zarejestruj</a>
                <a href="/login">Zaloguj</a>
              @endif
          </ul>

            <ul class="flex justify-center space-x-5 w-full">
              <li><a class="hover:text-gray-200" href="/">Posty</a></li>
  
              @if(Auth::check())
                <li><a class="hover:text-gray-200" href="/posts/create">Dodaj post</a></li>
              @endif
              
              <li><a class="hover:text-gray-200" href="#">Kontakt</a></li>
  
            </ul>



          </div>



          {{-- desktop nav --}}
          
          <!-- Nav Links -->
          <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
            <li><a class="hover:text-gray-200" href="/">Posty</a></li>

            @if(Auth::check())
            <li><a class="hover:text-gray-200" href="/posts/create">Dodaj post</a></li>
            @endif
            
            <li><a class="hover:text-gray-200" href="#">Kontakt</a></li>
          </ul>

          <!-- Header Icons -->
          <div class="hidden md:flex items-center space-x-5 mx-4">

            <!-- Sign In / Register      -->
            @if(Auth::check())
              <p>Witaj {{ Auth::user()->name }}</p>
              <a href="/logout">Wyloguj</a>
            @endif
            
            @if(!Auth::check())
              <a href="/register">Zarejestruj</a>
              <a href="/login">Zaloguj</a>
            @endif
            
          </div>

        </div>


      </nav>
    </section>
  </div>