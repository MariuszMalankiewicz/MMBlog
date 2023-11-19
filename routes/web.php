<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [PostController::class, 'index']);

// POSTS

Route::get('/', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts', [PostController::class, 'store']);

Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/post/{id}/edit', [PostController::class, 'edit']);

Route::post('/post/{id}', [PostController::class, 'update']);

Route::get('/posts/{id}', [PostController::class, 'destroy']);

// COMMENTS

Route::post('/post/{id}/comment', [CommentsController::class, 'store']);

Route::get('/comments/{id}/edit', [CommentsController::class, 'edit']);

Route::post('/comments/{id}', [CommentsController::class, 'update']);

Route::get('/comment/{id}', [CommentsController::class, 'destroy']);

// REGISTER

Route::get('/register', [RegisterController::class, 'create']);

Route::post('/register', [RegisterController::class, 'store']);

// LOGIN

Route::get('/login', [SessionController::class, 'create']);

Route::post('/login', [SessionController::class, 'store']);

Route::get('/logout', [SessionController::class, 'destroy']);

// managment posts

Route::get('/managment/posts', [ManagmentPostController::class, 'index']);



