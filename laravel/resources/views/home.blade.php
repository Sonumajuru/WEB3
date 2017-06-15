@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
             </div>
        <br/>
                     <div class="about-section">
           <div class="text-content">
             <div class="span7 offset1">
                @if(Session::has('success'))
                  <div class="alert-box success">
                  <h2>{!! Session::get('success') !!}</h2>
                  </div>
                @endif                  
              </div>
           </div>
           <style>

               label{
            margin-right:20px;
          }
                 
                form{
            padding:20px;
            border-radius:10px;
          }

          input[type="submit"]{
            background:#0098cb;
            border:0px;
            border-radius:5px;
            color:#fff;
            padding:10px;
            margin:20px auto;
          }


           </style>

       <div class="container">
             <div class="content">
         <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                <label>Select image to upload:</label>
                <input type="file" name="file" id="file">
                <input type="submit" value="Upload" name="submit">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
          </form>
      </div>
    </div>

    <div>
        
          <h5> Add New Employees </h5>
        <input type="button" class="btn btn-primary" onclick="location.href='create';" value = "Add" /></br>
           
    </div>
        </div>
    </div>
</div>
@endsection
    