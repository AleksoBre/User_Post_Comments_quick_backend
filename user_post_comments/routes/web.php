<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// kreiram seedere sa realnim userima, postovima, komentarima


// USERS
Route::get('/users', function() {
    $users = User::withcount(['comments', 'posts'])->paginate(5);
    return view('users.index', ['users' => $users]);
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
    return view('posts.show', ['post' => $post]);
});


// COMMENTS
Route::get('/posts/{post}/comments', function(Post $post) {
    $post->load('comments.user');

    return view('comments.index', ['post' => $post]);
});




// forma za crud posta, forma za crud komentara
// 7 akcija (index, show, create, store, edit, update, delete)
// stranice (index, show, create, edit)




// 1. kreiram stranice
// index, show, create, edit






//2. dodam funkcionalnost
// 3. kreiram rute