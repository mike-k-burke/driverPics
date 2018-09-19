@extends('app')
@section('content')
	<table class="table table-striped">
		<thead>
			<th>Pickup Postcode</th>
			<th>Dropoff Postcode</th>
			<th>Driver</th>
			<th colspan="2"></th>
		</thead>
		<tbody>
			@foreach($records as $record)
			<tr>
				<td>{{ $record->pickup_postcode }}</td>
				<td>{{ $record->dropoff_postcode }}</td>
				<td>{{ $record->driver->name }}</td>
				<td>
					<a href="{{ route('load.edit', [$record->id]) }}" class="btn btn-warning">Edit</a>
				</td>
				<td>
					<form method="POST" action="{{ route('load.destroy', [$record->id]) }}">
						@csrf
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection