<div>
    <section class="relative mx-auto">
        <!-- navbar -->
      <nav class="flex justify-between bg-gray-900 text-white w-screen">
        <div class="px-5 xl:px-12 py-6 flex w-full items-center relative">
          <div class="flex min-w-fit">
            <a class="text-3xl font-bold font-heading" href="/">MMBlog<span class="w-2 h-9 ml-0.5 align-middle bg-blue-500 inline-block"><span></a>
          </div>
        
          {{-- mobile nav --}}
          <svg data-hamburger class="fill-white ml-auto  me-10 md:hidden scale-150 cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>

          <svg data-x-mark class="fill-white ml-auto me-10 hidden md:hidden scale-150 cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
          
          <div data-mobileNavContainer class="z-10 hidden md:hidden bg-gray-900 flex flex-col pt-6 items-center px-4 h-44 w-full font-semibold absolute top-20 right-0">

            <ul class="flex justify-end space-x-5 mb-12 me-10 w-full">
              @if(Auth::check())
                <p>Witaj {{ Auth::user()->name }}</p>
                {{-- <form method="POST" action="{{ route('login.destroy', ['login' => Auth::user()->id]) }}">
                  @csrf
                  @method('DELETE')
                  <button class="text-white hover:underline" type="submit">Wyloguj</button>
                </form> --}}
              @endif
            
              @if(!Auth::check())
                <a href="{{ route('register.create') }}">Zarejestruj</a>
                <a href="{{ route('login.create') }}">Zaloguj</a>
              @endif
          </ul>

            <ul class="flex justify-center space-x-5 w-full">

              <a class="hover:text-gray-200" href="/">Strona główna</a>
  
              @if(Auth::check() && Auth::user()->role === 'admin' || Auth::check() && Auth::user()->role === 'superAdmin')

                <a class="hover:text-gray-200" href="/managments">Panel administracyjny</a>
              @endif
  
            </ul>

          </div>

          {{-- desktop nav --}}
          
          <!-- Nav Links -->
          <div class="hidden md:flex justify-between w-full mx-5 lg:ms-10 xl:ms-16 px-2 font-semibold font-heading">
            
            <div class="flex space-x-5">

              <a class="hover:text-gray-200" href="/">Strona główna</a>

              @if(Auth::check() && Auth::user()->role === 'admin' || Auth::check() && Auth::user()->role === 'superAdmin')
                <a class="hover:text-gray-200" href="/managments">Panel administracyjny</a>
              @endif

            </div>

          <!-- Sign In / Register      -->
          <div class="hidden md:flex space-x-5">

            @if(Auth::check())

              <p>Witaj {{ Auth::user()->name }}</p>
              <form method="POST" action="{{ route('login.destroy', ['login' => Auth::user()->id]) }}">
                @csrf
                @method('DELETE')
                <button class="text-white hover:underline" type="submit">Wyloguj</button>
              </form>

            @endif
            
            @if(!Auth::check())

              <a href="{{ route('register.create') }}">Zarejestruj</a>

              <a href="{{ route('login.create') }}">Zaloguj</a>
              
            @endif
            
          </div>

        </div>

        </div>


      </nav>
    </section>
  </div>