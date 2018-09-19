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
			<th>Filename</th>
			<th colspan="2">Actions</th>
		</thead>
		<tbody>
			@foreach($images as $image)
			<td>{{ $image['id'] }}</td>
			<td>{{ $image['filename'] }}</td>
			<td>
				<a href="{{ action('ImageController@edit', $image) }}" class="btn btn-warning">Edit</a>
			</td>
			<td>
				<form method="POST" action="{{ action('ImageController@destroy', $image) }}">
					@csrf
					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
			@endforeach
		</tbody>
	</table>
@endsection