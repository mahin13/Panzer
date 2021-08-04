@if ($errors->any())
<div class="alert alert-dange">
	<a href="#" class="close" date-dismiss="alert" aria-label="close">&times;</a>
		@foreach($errors->all() as $error)
		<p>{{ $error }}</p>
		@endforeach
	</ul>
</div>

@endif
@if (Session::has('success'))
<div class="alert alert-success">
	<p>{{Session::get('success')}}</p>
</div>
@endif

@if (Session::has('errors'))
<div class="alert alert-danger">
	<p>{{Session::get('errors')}}</p>
</div>
@endif