@extends('app')
@section('content')
		<h2>List of Vehicles</h2>
		<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>Load ID</th>
				<th>VRM</th>
				<th colspan="2">Actions</th>
			</thead>
			<tbody>
				@foreach($vehicles as $vehicle)
				<tr>
					<td>{{ $vehicle['id'] }}</td>
					<td>{{ $vehicle -> loadd['pickup_postcode'] }}</td>
					<td>{{ $vehicle['VRM'] }}</td>
					<td>
						<a href="{{ action('VehicleController@edit', $vehicle) }}" class="btn btn-warning">Edit</a>
					</td>
					<td>
						<form method="POST" action="{{ action('VehicleController@destroy', $vehicle) }}">
							@csrf
							<input type="hidden" name="_method" value="DELETE">
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		{{ $vehicles -> links() }}

@endsection