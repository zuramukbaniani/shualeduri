<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	@foreach($films as $film)
		<h1>{{ $film->title }}</h1>
		<img src="{{ $film->image }}">
		<p>{{ $film->description }}</p>
		<p>{{ $film->IMDB }}</p>
		<form method="POST" action="{{ route('AdminDelete') }}">
			@csrf
			<input type="hidden" name="id" value="{{ $film->id }}">
			<button class= "btn btn-danger">წაშლა</button>
		</form>
	@endforeach
</body>
</html>