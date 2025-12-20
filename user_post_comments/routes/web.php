<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


// USERS
Route::get('/users', function() {
    $users = User::withcount(['comments', 'posts'])->paginate(5);
    return view('users.index', ['users' => $users]);
});

Route::get('/users/create', function() {
    return view('users.create');
});

Route::put('users/create', function() {

    // mozda je cak i post request umesto put
});

Route::get('/users/{user}', function(User $user) {
    $user->loadCount(['comments', 'posts']);
    $posts = $user->posts()->latest()->paginate(5);

    return view('users.show', ['user' => $user, 'posts' => $posts]);
});

// POSTS
Route::get('/posts', function() {
    return view('posts.index', ['posts' => Post::with('user')->latest()->paginate(5)]);
});

Route::get('/posts/{post}', function(Post $post) {
    $post->load('user');
    return view('posts.show', compact('post'));
});


// COMMENTS
Route::get('/posts/{post}/comments', function(Post $post) {
    $post->load('comments.user');

    return view('comments.index', compact('post'));
});




// crud za users, posts, comments
// 7 akcija (index, show, create, store, edit, update, delete)
// METODE FORME (GET, POST, PUT, PATCH, DELETE)
// stranice (index, show, create, edit)