@extends('app')
@section('content')
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th colspan="2">Actions</th>
		</thead>
		<tbody>
			@foreach($records as $record)
			<tr>
				<td>{{ $record->id }}</td>
				<td>{{ $record->name }}</td>
				<td>
					<a href="{{ route('driver.edit', [$record->id]) }}" class="btn btn-warning">Edit</a>
				</td>
				<td>
					<form method="POST" action="{{ route('driver.destroy', [$record->id]) }}">
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