<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/users', function() {
    dd('ovo je users stranica');
});

Route::get('/posts', function() {
    return view('posts.index', ['posts' => Post::with('user')->latest()->paginate(5)]);
});

Route::get('/posts/{post}', function(Post $post) {
    return view('posts.show', ['post' => $post]);
});

Route::get('/posts/{post}/comments', function(Post $post) {

    return view('comments.index', ['post' => $post]);
});


// forma za crud posta, forma za crud komentara
// 7 akcija (index, show, create, store, edit, update, delete)
// stranice (index, show, create, edit)




// 1. kreiram stranice
// index, show, create, edit






//2. dodam funkcionalnost
// 3. kreiram rute