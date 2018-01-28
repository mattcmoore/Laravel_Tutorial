@extends('layouts.master')

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
@endsection