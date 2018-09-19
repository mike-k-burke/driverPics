@extends('app')
@section('content')
		<h2>Edit Load</h2>
		<form id="editLoadForm" method="POST" action="{{ route('load.update', [$record->id])  }}">
			@csrf
			<input type="hidden" name="_method" value="PATCH">
			<div class="row">
				<div class="form-group col-md-4">
					<label for="pickup_postcode">Pickup Postcode</label>
					<input type="text" name="pickup_postcode" value="{{ $record->pickup_postcode }}" class="form-control">
				</div><!--.form-group-->
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="dropoff_postcode">Dropoff Postcode</label>
					<input type="text" name="dropoff_postcode" value="{{ $record->dropoff_postcode }}" class="form-control">
				</div><!--.form-group-->
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label for="driver_id">Driver</label>
					<select name="driver_id" class="form-control">
						@foreach($drivers as $id => $driver)
							<option value="{{ $id }}" @if ($record->driver_id == $id) selected @endif >{{ $driver }}</option>
						@endforeach
					</select>
				</div>
			</div>
		</form>

		<table class="table table-striped">
			<thead>
				<th>VRM</th>
				<th></th>
			</thead>
			<tbody>
				@foreach($record->vehicles as $vehicle)
				<tr>
					<td>{{ $vehicle->VRM }}</td>
					<td>
						<form method="POST" action="{{ route('vehicle.destroy', [$vehicle->id]) }}">
							@csrf
							<input type="hidden" name="_method" value="DELETE">
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		<a href="{{ route('load.vehicle.add', [$record->id]) }}" class="btn btn-success">Add Vehicle</a>

		<button form="editLoadForm" type="submit" class="btn btn-success">Finish</button>
@endsection

@section('javascript')
	<script>
		(function(){
			var VRMInputs = document.getElementsByClassName('VRMInput');
			console.log(VRMInputs);
			for(var VRMInput of VRMInputs){
				VRMInput.addEventListener('click', function(){this.remove();}, false);
			}
			
		})();
	</script>
@endsection