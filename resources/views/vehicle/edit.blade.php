@extends('app')
@section('content')
		<h2>Edit Vehicle</h2>
		<form method="POST" action="{{ action('VehicleController@update', $vehicle) }}">
			@csrf
			<input type="hidden" name="load_id" value="{{ $vehicle['load_id'] }}">
			<input type="hidden" name="_method" value="PATCH">
			<div class="row">
				<div class="form-group col-md-4">
					<label for="VRM">VRM</label>
					<input type="text" name="VRM" value="{{ $vehicle['VRM'] }}" class="form-control">
				</div><!--.form-group-->
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="VIN">VIN</label>
					<input type="text" name="VIN" value="{{ $vehicle['VIN'] }}" class="form-control">
				</div><!--.form-group-->
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="make">Make</label>
					<input type="text" name="make" value="{{ $vehicle['make'] }}" class="form-control">
				</div><!--.form-group-->
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="model">Model</label>
					<input type="text" name="model" value="{{ $vehicle['model'] }}" class="form-control">
				</div><!--.form-group-->
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="colour">Colour</label>
					<input type="text" name="colour" value="{{ $vehicle['colour'] }}" class="form-control">
				</div><!--.form-group-->
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<button type="submit" class="btn btn-success">Edit</button>					
				</div><!--.form-group-->
			</div><!--row-->
		</form>
@endsection