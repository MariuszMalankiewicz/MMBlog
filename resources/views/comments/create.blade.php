<div class="max-w-4xl w-full px-10 my-4 py-6 mx-auto border rounded-lg">

    <form class="w-full" method="POST" action="/post/{{ $post->id }}/comment">
        @csrf

            <input type="hidden" name="post_id" value="{{ $post->id }}">

            <div class="mb-4 text-center">
                <h1 class="text-center text-gray-700 font-bold">Dodaj komentarz</h1>
            </div>
            

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                    Treść
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="body" type="text"></textarea>
            </div>

            <div class="mb-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Publikuj
                </button>
            </div>

            @include('layouts.errors')
          
      </form>

</div>