<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// $fillable limits what can be passed to  i.e. create() 
   protected $fillable = ['title','body'];
}
