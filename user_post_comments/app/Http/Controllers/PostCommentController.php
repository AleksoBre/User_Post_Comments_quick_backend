<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function index(Post $post) {
        $post->load('comments.user');
        return view('comments.index', compact('post'));
    }
}
