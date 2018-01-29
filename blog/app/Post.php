<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
	// $fillable limits what can be passed to posts_table i.e. create() 
   protected $fillable = ['title','body','user_id'];

   public function comments()
   {
   		// Comment::class === '\app\Comment'
   		return $this->hasMany(Comment::class);
   }

   public function addComment($body)
   {
   		/*
   		// this is for use on the CommentsController expressions $this->addComment(request('body'))
   		Comment::create([
   			'body'=>$body,
   			'post_id'=>$this->id	
   		]);
		*/
		// using the comments() 'class relationship' method
		$this->comments()->create(compact('body'));
   }

   public function user()
   {
      return $this->belongsTo(User::class);
   }
}
