@extends('layouts.app')

@section('content')

	<b>ID</b>&nbsp;&nbsp;&nbsp;{{$user->id}}<br/>
	<b>Name</b>&nbsp;&nbsp;&nbsp;{{$user->name}}<br/>
	<b>EMAIL</b>&nbsp;&nbsp;&nbsp;{{$user->email}}<br/>
	<b>MOBILE</b>&nbsp;&nbsp;&nbsp;{{$user->mobile}}<br/>
	<b>GENDER</b>&nbsp;&nbsp;&nbsp;{{$user->gender}}<br/>
	<b>OPERATING SYSTEM</b>&nbsp;&nbsp;&nbsp;{{$user->profession}}<br/>

@endsection