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
	@endforeach
</body>
</html>