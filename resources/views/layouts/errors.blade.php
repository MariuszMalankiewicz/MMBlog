
@if(count($errors))
    <div role="alert">
        <div class="border border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
        @endforeach
        </div>
    </div>
@endif