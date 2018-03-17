<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student</title>
</head>
<body>
	<div style="text-align: center;" >
		<h1>Danh sách sinh viên</h1>
		@foreach($data as $item) 
		{!! $item->name !!}
		<br>
		@endforeach
	</div>	
</body>
</html>

