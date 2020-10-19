<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST" action="{{ route("saveFilm") }}">
		@csrf
		<label>სათაური</label>
		<input type="text" name="title">
		<label>სურათი</label>
		<input type="text" name="image">
		<label>აღწერა</label>
		<input type="text" name="descriction">
		<label>IMDB</label>
		<input type="text" name="IMDB">
		<button>დამატება</button>
	</form>
</body>
</html>