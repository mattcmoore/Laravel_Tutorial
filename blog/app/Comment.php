<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
