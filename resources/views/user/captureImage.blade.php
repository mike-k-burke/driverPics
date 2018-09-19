@extends('app')
@section('content')
<form action="/images/upload" method="POST">
	<input type="file" accept="image/*" name="image1" capture="environment">
	<input type="file" accept="image/*" name="image2" capture="environment">
</form>
@endsection