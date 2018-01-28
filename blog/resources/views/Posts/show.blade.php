@extends('layouts.master')

<!-- 
$post passed from PostsController.php show() via route-model-binding, and == id where '/posts/{id}' 
-->

@section('content')
	<h1 class="blog-post-title">
		{{ $post -> title}}
	</h1>
    <p class="blog-post-meta"> 
    	{{ $post->created_at->diffForHumans() }}
    </p>
    {{ $post->body }}
    <hr>

    <div class="comments">
	@foreach($post->comments as $comment)
		<ul class="list-group">
			<li class="list-group-item">
				<strong>
					{{ $comment->created_at->diffForHumans() }} :
				</strong>
				{{ $comment->body }}
			</li>	
	@endforeach
		</ul>			
	</div>
	<hr>
	<div class="card">
		<div class="card-block">
			<form method="POST" action="/posts/{{ $post->id }}/comments">
			{{ csrf_field() }}
				<div class="form-group">
					<textarea name="body" placeholder="your comment here" class="form-control" required></textarea>
				</div>
				 <div class="form-group">
  					<button type="submit" class="btn btn-primary">Add Comment</button>
				</div>
			</form>
		</div>
	</div>
	@include('layouts.errors')
@endsection