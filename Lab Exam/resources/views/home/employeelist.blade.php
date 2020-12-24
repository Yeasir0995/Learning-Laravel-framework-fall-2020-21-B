<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Username</td>
			<td>Name</td>
			<td>Contact No.</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($emps); $i++)

			<tr>
				<td>{{$emps[$i]['id']}}</td>
				<td>{{$emps[$i]['username']}}</td>
				<td>{{$emps[$i]['name']}}</td>
				<td>{{$emps[$i]['contact']}}</td>
				
			</tr>

		@endfor


	</table>
</body>
</html>