<?php

namespace App;

use App\Comment;
use App\Post;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function publish(Post $post)
    {
        return $this->posts()->save($post);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function  comment(Comment $comment)
    {
        return $this->comments()->save($comment);
    }
}
