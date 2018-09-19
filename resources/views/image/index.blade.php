@extends('app')
@section('content')
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Filename</th>
			<th colspan="2">Actions</th>
		</thead>
		<tbody>
			@foreach($records as $record)
			<td>{{ $record->id }}</td>
			<td>{{ $record->filename }}</td>
			<td>
				<a href="{{ route('image.edit', [$record->id]) }}" class="btn btn-warning">Edit</a>
			</td>
			<td>
				<form method="POST" action="{{ route('image.destroy', [$record->id]) }}">
					@csrf
					<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
			@endforeach
		</tbody>
	</table>
@endsection