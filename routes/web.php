<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ManagmentsController;

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

Route::get('/', [HomeController::class, 'index']);

Route::resource('/posts', PostController::class);

// COMMENTS

Route::resource('posts.comments', CommentsController::class)->except('index', 'show', 'create');

// Route::post('/post/{id}/comment', [CommentsController::class, 'store']);

// Route::get('/comments/{id}/edit', [CommentsController::class, 'edit']);

// Route::post('/comments/{id}', [CommentsController::class, 'update']);

// Route::get('/comment/{id}', [CommentsController::class, 'destroy']);

// REGISTER

Route::get('/register', [RegisterController::class, 'create']);

Route::post('/register', [RegisterController::class, 'store']);

// LOGIN

Route::get('/login', [SessionController::class, 'create']);

Route::post('/login', [SessionController::class, 'store']);

Route::get('/logout', [SessionController::class, 'destroy']);

// managment posts

// Route::get('/managments', [ManagmentsController::class, 'index'])->middleware('can:isAdmin');
Route::get('/managments', [ManagmentsController::class, 'index']);

// users

Route::get('/users', [UsersController::class, 'index']);

Route::get('/users/{id}', [UsersController::class, 'show']);