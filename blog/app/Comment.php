<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
	protected $fillable = ['post_id','body'];
    
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
