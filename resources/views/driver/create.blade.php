@extends('app')
@section('content')
		<h2>Create Driver</h2>
		<form method="POST" action="{{ url('drivers') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="form-group col-md-4">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name">
				</div><!--.form-group-->
			</div><!--.row-->
			<div class="row">
				<div class="form-group col-md-4">
					<button type="submit" class="btn btn-success">Create</button>
				</div>
			</div><!--.row-->
		</form>
@endsection