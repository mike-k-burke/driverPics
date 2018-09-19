@extends('app')
@section('content')
			@if(\Session::has('success'))
				<div class="alert alert-success">
					<p>{{ \Session::get('success') }}</p>
				</div>
			@endif
			<table class="table table-striped">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th colspan="2">Actions</th>
				</thead>
				<tbody>
					@foreach($drivers as $driver)
					<tr>
						<td>{{ $driver['id'] }}</td>
						<td>{{ $driver['name'] }}</td>
						<td>
							<a href="{{ action('DriverController@edit', $driver) }}" class="btn btn-warning">Edit</a>
						</td>
						<td>
							<form method="POST" action="{{ action('DriverController@destroy', $driver) }}">
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