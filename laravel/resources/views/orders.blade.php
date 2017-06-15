 
@extends('layouts.app')
@section('content')
<?php use App\Recipe as Recipe;?>


        @foreach ($orders as $order) 
<?php $recipes = Recipe::find($order->recipe_id) ?>
<ul>
    <b>
    {{ $order->id}} .      {{ $order->name }}  Ingredients are:
    <li>    {{ $recipes->ingredient_1  }} </li>
     <li>    {{$recipes->ingredient_2}} </li>
     <li>    {{$recipes->ingredient_3}}</li> 
     <li>    {{$recipes->body}} </li> 
    </b>
    
</ul>
@endforeach
@endsection