@foreach ($post->comments as $comment)
    <div class="max-w-4xl w-full px-10 my-4 py-6 mx-auto border rounded-lg">
        <div>
            <span class="font-light text-gray-600">{{ $comment->created_at->diffForHumans();  }}</span>
        </div>
        <div class="mt-2">
            <p class="mt-2 text-gray-600">{{ $comment->body }}</p>

            @can('auth_user_id_comment_user_id', $comment) 
                <div class=" flex items-center justify-end space-x-5">
                    <a class="text-blue-600 hover:underline" href="/comments/{{ $comment->id }}/edit">Edytuj</a>
                    <a class="text-blue-600 hover:underline" href="/comment/{{ $comment->id }}">Usuń</a>
                </div>
            @endcan

            <p class="text-end font-bold text-sm">{{ $comment->user->name }}</p>
            
        </div>
    </div> 
@endforeach