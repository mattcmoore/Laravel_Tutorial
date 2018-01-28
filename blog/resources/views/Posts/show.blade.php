@extends('layouts.master')

@section('content')
	<h1 class="blog-post-title">
		{{ $post -> title}}
	</h1>
    <p class="blog-post-meta"> 
    	{{ $post->created_at->diffForHumans() }}
    </p>
    {{ $post->body }}
@endsection