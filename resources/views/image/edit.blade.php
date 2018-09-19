@extends('app')
@section('content')
		<h2>Edit Image</h2>
		<form method="POST" action="{{ action('ImageController@update', $image) }}" enctype="multipart/form-data">
			@csrf
			<input name="_method" type="hidden" value="PATCH">
			<div class="row">
				<div class="form-group col-md-4">
					<label for="filename">Filename</label>
					<input type="text" class="form-control" name="filename" value="{{ $image['filename'] }}">
				</div><!--.form-group-->
			</div><!--.row-->
			<div class="row">
				<div class="form-group col-md-4">
					<button type="submit" class="btn btn-success">Edit</button>
				</div>
			</div><!--.row-->
		</form>
@endsection