@extends('layouts.app')

@section('content')


<title> Update </title>

	<body>
		
			{{Form::model($user, ['method' => 'patch', 'action' => ['PostController@update', $user->id]])}}

			{{Form::label('name', 'Name')}}
			{{Form::text('name')}}<br/>

			{{Form::label('email', 'Email')}}
			{{Form::text('email')}}<br/>

			{{Form::label('mobile', 'Mobile')}}
			{{Form::text('mobile')}}<br/>

			Gender{{Form::radio('gender', 'male')}}Male
			{{Form::radio('gender', 'female')}}Female<br/>

			{{Form::label('os', 'Operating System')}}
			{{Form::select('os', [
			'baker'=>'baker',
			'cook assistant'=>'cook assistant',
			'manager'=>'manager',
			'cleaner'=>'cleaner',
			'coordinator'=>'coordinator',
			'assistant manager'=>'assistant manager'
			])}}
			<br/>
			{{Form::submit('Update')}}
			{{Form::close()}} 


	</body>

@endsection