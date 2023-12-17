<div class="w-full px-4 sm:px-6">
  @foreach ($post->comments as $comment)
      <div class="max-w-4xl w-full px-10 my-4 py-6 mx-auto border rounded-lg">
          <div>
              <span class="font-light text-gray-600">{{ $comment->created_at->diffForHumans();  }}</span>
          </div>
          <div class="mt-2">
              <p class="mt-2 text-gray-600">{{ $comment->body }}</p>
              

              @can('auth_user_id_comment_user_id', $comment) 
                    <form class="flex items-center justify-end space-x-5" action="{{ route('posts.comments.destroy',['post' => $post->id, 'comment' => $comment->id]) }}" method="POST">
                        <a class="text-blue-600 hover:underline" href="{{  route('posts.comments.edit', ['post' => $post->id ,'comment' => $comment->id] ) }}">Edytuj</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-blue-600 hover:underline">Usuń</button>
                    </form>
              @endcan

              <p class="mt-4 text-end font-bold text-sm">{{ $comment->user->name }}</p>
              
          </div>
      </div> 
  @endforeach
</div>