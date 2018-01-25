@extends ('layouts.master')

@section ('content')
<h1>Create A Post</h1>
<hr>
<form method="POST" action="/posts">
{{csrf_field()}}
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text"  id="title" name="title" class="form-control">
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea type="body" name="body" class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Publish</button>
</form>
@endsection