@extends('app')
@section('content')
		<h2>Edit Vehicle</h2>
		<form method="POST" action="{{ route('vehicle.update', [$record->id])  }}">
			@csrf
			<input type="hidden" name="load_id" value="{{ $record->load_id }}">
			<input type="hidden" name="_method" value="PATCH">
			<div class="row">
				<div class="form-group col-md-4">
					<label for="VRM">VRM</label>
					<input type="text" name="VRM" value="{{ $record->VRM }}" class="form-control">
				</div><!--.form-group-->
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="VIN">VIN</label>
					<input type="text" name="VIN" value="{{ $record->VIN }}" class="form-control">
				</div><!--.form-group-->
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="make">Make</label>
					<input type="text" name="make" value="{{ $record->make }}" class="form-control">
				</div><!--.form-group-->
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="model">Model</label>
					<input type="text" name="model" value="{{ $record->model }}" class="form-control">
				</div><!--.form-group-->
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="colour">Colour</label>
					<input type="text" name="colour" value="{{ $record->colour }}" class="form-control">
				</div><!--.form-group-->
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<button type="submit" class="btn btn-success">Edit</button>					
				</div><!--.form-group-->
			</div><!--row-->
		</form>
@endsection