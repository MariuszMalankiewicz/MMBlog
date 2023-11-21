<?php

namespace App\Providers;

use App\Models\Comment;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('auth_user_id_post_user_id', function (User $user, Post $post) {
            return $user->id === $post->user_id;
        });

        Gate::define('auth_user_id_comment_user_id', function (User $user, Comment $comment) {
            return $user->id === $comment->user_id;
        });

        Gate::define('admin', function (User $user) {
            return $user->id === 1;
        });

        
    }
}
