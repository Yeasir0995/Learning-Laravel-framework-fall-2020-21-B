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
			<td>Company</td>
			<td>Job Title</td>
			<td>Salary</td>
			<td>Location</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($jobs); $i++)

			<tr>
				<td>{{$jobs[$i]['id']}}</td>
				<td>{{$jobs[$i]['company']}}</td>
				<td>{{$jobs[$i]['job_title']}}</td>
				<td>{{$jobs[$i]['salary']}}</td>
				<td>{{$jobs[$i]['job_location']}}</td>
			</tr>

		@endfor


	</table>
</body>
</html>