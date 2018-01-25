<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
    	return view('posts.index');
    }
    public function show(){
    	return view('posts.show');
    }
    public function create(){
    	return view('posts.create');
    }
    public function store(){
    	$this->validate(request(),[
					"title" => "required",
					"body" => "required"
		]);

    	// Create a new post using request data
    	//$post = new \App\Post;
    	//$post->title = request('title');
    	//$post->body = request('body');
    	// Save it to database
    	//$post->save();

    	// active record request 
    	\App\Post::create(['title' => request('title'),'body' => request('body')
    	]);
    	
    	// Redirect somewhere in application
    	return redirect('/');
    }
}