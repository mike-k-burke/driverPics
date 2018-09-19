@extends('app')
@section('content')
		<h2>Create Load</h2>
		<form method="POST" action="{{ route('load.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="form-group col-md-4">
					<label for="pickup_postcode">Pickup Postcode</label>
					<input type="text" name="pickup_postcode" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="dropoff_postcode">Dropoff Postcode</label>
					<input type="text" name="dropoff_postcode" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="driver_id">Driver</label>
					<select name="driver_id" class="form-control">
						<option>Select Driver...</option>
						@foreach($drivers as $id => $driver)
							<option value="{{ $id }}">{{ $driver }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<button type="submit" class="btn btn-success">Create</button>
				</div>
			</div>
		</form>
@endsection