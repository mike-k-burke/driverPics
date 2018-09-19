@extends('app')
@section('content')
	<h2>Create Image</h2>
	<form method="post" action="{{ route('image.store')  }}" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="form-group col-md-4">
				<label for="filename">Filename</label>
				<input type="text" name="filename" class="form-control">
			</div><!--.form-group-->
		</div><!--.row-->
		<div class="row">
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success">Create</button>
			</div><!--.form-group-->
		</div><!--.row-->
	</form>
@endsection