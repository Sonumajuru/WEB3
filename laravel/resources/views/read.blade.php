@extends('layouts.app')

@section('content')



	
<label> READ </label>

	<style>
		table,thead,th,tr,td {
			border-collapse: collapse;
			border: 1px solid black;
			padding-left: 1.5em;
		}

	</style>
	<body>
	<br><br>
	<h3> <a href='create'>Create</a></h3>
	<br>
	<hr>
	<table style="width:100%">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Gender</th> 
			<th>Profession</th>
			<th>Show</th>
			<th>Update</th>
			<th>Delete</th>
		</thead>
		@foreach($user as $users) 
		<tr>
			<td>{{$users->id}}</td>
			<td>{{$users->name}}</td>
			<td>{{$users->email}}</td>
			<td>{{$users->mobile}}</td>
			<td>{{$users->gender}}</td>
			<td>{{$users->profession}}</td>
			<td><a href='show/{{$users->id}}'>show</a></td>
			<td><a href='edit/{{$users->id}}'>Update</a></td>
			<td><a href='delete/{{$users->id}}'>Delete</a></td>
		</tr>
		@endforeach
	</table>
<h5> Print Employees </h5>
         <input type="button" class="btn btn-primary" onclick="location.href='getPDF';" value = "Print DB" />
	</body>


@endsection