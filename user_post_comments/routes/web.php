<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::resource('posts', PostController::class)->only(['index', 'show']);
Route::resource('posts.comments', PostCommentController::class)->only(['index']);
Route::resource('users', UserController::class);



// crud za users, posts, comments
// METODE FORME (GET, POST, PUT, PATCH, DELETE)
// stranice (index, show, create, edit)