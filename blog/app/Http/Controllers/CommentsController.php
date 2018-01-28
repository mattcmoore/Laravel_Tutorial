<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
   
   
    public function store(Post $post)
    {
    /*
    	// create a record in comments_table via the CommentController
    	Comment::create([
    		'body' => request('body'),
    		'post_id' => $post->id
    	]);
	*/
    	$this->validate(request(),['body'=>'required|min:2']);
    	$post->addComment(request('body'));
    	
    	return back();
    } 
    
}
