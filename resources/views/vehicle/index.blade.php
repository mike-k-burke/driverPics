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
				@foreach($records as $record)
				<tr>
					<td>{{ $record->id }}</td>
					<td>{{ $record->vehicle_load->pickup_postcode }}</td>
					<td>{{ $record->VRM }}</td>
					<td>
						<a href="{{ route('vehicle.edit', [$record->id]) }}" class="btn btn-warning">Edit</a>
					</td>
					<td>
						<form method="POST" action="{{ route('vehicle.destroy', [$record->id]) }}">
							@csrf
							<input type="hidden" name="_method" value="DELETE">
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		{{ $records->links() }}

@endsection