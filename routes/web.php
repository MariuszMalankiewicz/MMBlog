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

Route::resource('/', HomeController::class)->only('index');
Route::resource('/posts', PostController::class);
Route::resource('posts.comments', CommentsController::class)->except('index', 'show', 'create');
Route::resource('register', RegisterController::class)->only('create', 'store');
Route::resource('login', SessionController::class)->only('create', 'store', 'destroy');

Route::get('/managments', [ManagmentsController::class, 'index']);

Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/{id}', [UsersController::class, 'show']);