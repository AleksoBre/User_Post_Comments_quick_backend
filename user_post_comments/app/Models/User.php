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

    public function posts() {
        return $this->hasMany(Post::class);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }


}
