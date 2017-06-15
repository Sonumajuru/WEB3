
@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>
        
    <div class="panel-heading">Dashboard</div>  
            
        <div class="panel-body">
        You are logged in {{ $name }} 
        </div>
    </div>
    <form method="PATCH" action="">
    <input type="hidden" name="_method" value="PUT" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="" class="form-control">
        </div>
        <div class="form-group">
        <label for="email">Email</label>
            <input type="email" name="email" value="" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">
        <i class="fa fa-btn fa-sign-in"></i>Update
        </button>
    </form>
    </div>

</div>

@endsection
