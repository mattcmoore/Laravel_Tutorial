<!-- if statement prevents .alert-danger box from being set until errors present-->
@if ( count($errors) )
<div class="form-group">
	<div class="alert alert-danger">
		<ul>
		
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>		
			@endforeach
		
		</ul>
	</div>
</div>
@endif