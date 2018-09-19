@extends('app')
@section('content')
		<h2>Create Vehicle for load to {{Session::get('load')['dropoff_postcode']}}</h2>
		<form method="POST" action="{{ url('/vehicles') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="form-group col-md-4">
					<label for="VRM">Registration Number</label>
					<input type="text" name="VRM" class="form-control">
				</div><!--.form-group-->
			</div><!--.row-->
			<div class="row">
				<div class="form-group col-md-4">
					<label for="VIN">Vehicle ID Number</label>
					<input type="text" name="VIN" class="form-control">
				</div><!--.form-group-->
			</div><!--.row-->
			<div class="row">
				<div class="form-group col-md-4">
					<label for="make">Make</label>
					<input type="text" name="make" class="form-control">
				</div><!--.form-group-->
			</div><!--.row-->
			<div class="row">
				<div class="form-group col-md-4">
					<label for="model">Model</label>
					<input type="text" name="model" class="form-control">
				</div><!--.form-group-->
			</div><!--.row-->
			<div class="row">
				<div class="form-group col-md-4">
					<label for="colour">Colour</label>
					<input type="text" name="colour" class="form-control">
				</div><!--.form-group-->
			</div><!--.row-->
			<div class="row">
				<div class="form-group">
					<input type="hidden" name="load_id" value="{{Session::get('load')['id']}}">
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<button type="submit" class="btn btn-success">Add Vehicle</button>
				</div><!--.form-group-->
			</div><!--.row-->
		</form>
		<ul>
		@foreach($load->vehicles() as $vehicle)
			<li class="form-control btn-warning">$vehicle['VRM']</li>
		@endforeach
		</ul>
@endsection