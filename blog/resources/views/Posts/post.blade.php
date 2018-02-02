<div class="blog-post">
    
    <h2 class="blog-post-title">
        
        <a href="posts/{{ $post->id }}">
            {{ $post -> title}}
        </a>
    
    </h2>

    <p class="blog-post-meta"> 
        
<!-- $post->user->name comes from user() in Post where $this->belongsTo(User::class -->            

        <a href="#"> {{ $post->user->name }} </a> 

        on {{ $post->created_at->toFormattedDateString() }}

    </p>

    {{ $post->body }}
  
</div><!-- /.blog-post
