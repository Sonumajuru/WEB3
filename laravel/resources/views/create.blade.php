@extends('layouts.app')

@section('content')


<label> CREATE </label>
    <form action="store" method="post">

            <label for="name">name</label>
            <input type="text" name="name"><br/>
            <label for="email">email</label>
            <input type="text" name="email"><br/>
            <label for="mobile">mobile</label>
            <input type="text" name="mobile"><br/>


            Gender<input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female<br/>

           <select name="profession" id="profession">
               <option value="baker">Baker</option>
               <option value="cook assistant">Cook Assistant</option>
               <option value="manager">Manager</option>
               <option value="cleaner">Cleaner</option>
               <option value="coordinator">Coordinator</option>
               <option value="assistant manager">Ass. Manager</option>

           </select>

         <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <label for=""></label>
            <input type="submit" name="submit" value="Submit">



    </form>

@endsection