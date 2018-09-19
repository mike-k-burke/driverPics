@extends('app')
@section('content')
		@if(\Session::has('success'))
			<div class="alert alert-success">
				<p>{{ \Session::get('success') }}</p>
			</div>
		@endif
		<table class="table table-striped">
			<thead>
				<th>Pickup Postcode</th>
				<th>Dropoff Postcode</th>
				<th>Driver</th>
				<th colspan="2"></th>
			</thead>
			<tbody>
				@foreach($loads as $load)
				<tr>
					<td>{{ $load['pickup_postcode'] }}</td>
					<td>{{ $load['dropoff_postcode'] }}</td>
					<td>{{ $load -> driver['name'] }}</td>
					<td>
						<a href="{{ action('LoadController@edit', $load) }}" class="btn btn-warning">Edit</a>
					</td>
					<td>
						<form method="POST" action="{{ action('LoadController@destroy', $load) }}">
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