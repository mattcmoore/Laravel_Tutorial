<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
	// $fillable limits what can be passed to posts_table i.e. create() 
   protected $fillable = ['title','body'];
}
