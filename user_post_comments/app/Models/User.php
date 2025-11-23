<?php

namespace App\Models;

use Dom\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $fillable = ['username'];

    public function post() {
        return $this->hasMany(Post::class);
    }
    public function comment() {
        return $this->hasMany(Comment::class);
    }


}
