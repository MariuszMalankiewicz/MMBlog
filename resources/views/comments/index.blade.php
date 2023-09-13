@foreach ($post->comments as $comment)
    <div class="max-w-4xl px-10 my-4 py-6 mx-auto border rounded-lg">
        <div>
            <span class="font-light text-gray-600">{{ $comment->created_at->diffForHumans();  }}</span>
        </div>
        <div class="mt-2">
            <p class="mt-2 text-gray-600">{{ $comment->body }}</p>
        </div>
    </div> 
@endforeach