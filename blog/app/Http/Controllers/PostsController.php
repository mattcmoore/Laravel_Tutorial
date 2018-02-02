<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Carbon\Carbon;

class PostsController extends Controller
{
    public function _construct(){
        // middleware that only allows logged in user to use index and show methods
        $this.middleware('auth')->except( ['index','show'] );
    }

    public function index()
    {
/*
      
    	$posts = Post::latest()
            ->filter( request(['month','year']) )
            ->get();

 
*/
    $posts = \App\Post::latest();

        // request comes from query string in archive link 
        if ($month = request('month') )
        {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ( $year = request('year') )
        {
            $posts->whereYear('created_at', $year);
        }
 
        $posts = $posts->get();
 
       return view( 'posts.index', compact('posts') );
    }
    
    public function show(Post $post){
   		 	
    	return view( 'posts.show', compact('post') );
    }
    
    public function create()
    {
    	return view('posts.create');
    }
    
    public function store()
    {
    	$this->validate(request(),[
			"title" => "required",
			"body" => "required"
		]);

       // auth()->user()->publish(new Post::request( ['title','body']) );

    	
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id'=> auth()->user()->id

    	]);
    
        
    	// Redirect somewhere in application
    	return redirect('/');
    }
}