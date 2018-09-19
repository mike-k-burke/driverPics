@extends('app')
@section('content')
	<h2>Edit Driver</h2>
	<form method="POST" action="{{ route('driver.update', [$record->id]) }}" enctype="multipart/form-data">
		@csrf
		<input name="_method" type="hidden" value="PATCH">
		<div class="row">
			<div class="form-group col-md-4">
				<label for="name">Name</label>
				<input type="text" class="form-control" name="name" value="{{ $record->name }}">
			</div><!--.form-group-->
		</div><!--.row-->
		<div class="row">
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success">Edit</button>
			</div>
		</div><!--.row-->
	</form>
@endsection