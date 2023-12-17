@if($message = Session::get('success'))
<p class="text-md font-bold text-green-600 my-5">{{ $message }}</p>
@endif