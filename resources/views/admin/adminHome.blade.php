<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			ჟანრი
		</tr>
		@foreach($janri as $janr)
		<th>
			<form method="POST" action="">
				<input type="hidden" name="id" value="{{ $janr->id }}">
			</form>
			<a href="{{ route('AdminDelete') }}"> {{ $janr->janri }} </a>
		</th>
		@endforeach
	</table>
</body>
</html>