<div>
   <h1 class="text-gray-700 font-bold text-2xl text-center">Archiwum</h1>
</div>
<div>
   <ol class="list-none">
      @foreach ($archives as $static)

         <li>
            <a href="/?month={{ $static['month'] }}&year={{ $static['year'] }}" class="text-blue-600 hover:underline">{{ $static['month'] .' '. $static['year'] }}</a>
         </li>

      @endforeach
    </ol>
</div>