<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
    	$this->validate(request(), ['body' => 'required|min:2']);
        $comment = new Comment(['body' => request('body')]);
        $comment->user_id = auth()->id();

        $post->addComment($comment);
  		
     
        return back();
    }
}
