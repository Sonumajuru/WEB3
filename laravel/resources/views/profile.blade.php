@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"><h4>{{ Auth::user()->name }}'s Profile</h4></div>

                <div class="panel-body">
                </div>
                    <div>
                    <!-- <h2>{{ Auth::user()->name }}'s Profile</h2> -->
                     <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float :left; border-radius:50%; margin-right:25px;">
                    <h4>Name: {{ Auth::user()->name }}</h4>
                    <h4>Email: {{ Auth::user()->email }}</h4>
                    <h4>Last login (Date&Time) : {{ Auth::user()->updated_at }}</h4>
                </div>
                    <button type="button" onclick="window.location='{{ url("/edit") }}'">Edit your profile</button>
              <div>
                <br>
              <br>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit"  value="Update" class="pull-right btn btn-sm btn-primary">
                </form>
              </div>
            </div>
  
@endsection
