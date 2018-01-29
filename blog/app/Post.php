<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

use Carbon\Carbon;

class Post extends Eloquent
{
	// $fillable limits what can be passed to posts_table i.e. create() 
   protected $fillable = ['title','body','user_id','created_at'];

   public function comments()
  
   {
   		// Comment::class === '\app\Comment'
   		return $this->hasMany(Comment::class);
   }

   public function addComment($body)
  
   {
      // using the comments() 'class relationship' method
      $this->comments()->create(compact('body'));

/*
   		// this is for use on the CommentsController expressions $this->addComment(request('body'))
   		Comment::create([
   			'body'=>$body,
   			'post_id'=>$this->id	
   		]);
*/
		
      }

   public function scopeFilter($query, $filters)

   {  
         if ( $month = $filters['month'] )
         // request comes from query string in archive link       
         {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
         }

         if ( $year = $filters['year'] )
         
         {
            $query->whereYear('created_at', $year);
         }

   }

   public function user()
  
   {
      return $this->belongsTo(User::class);
   }

}
