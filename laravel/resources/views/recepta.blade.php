 
@extends('layouts.app')
@section('content')
<?php use App\Recipe as Recipe;
use App\Order as Order;
?>


      <b> The recipe for {{ $order->name }}  is:  <br />
    <?php  $recipes = Recipe::find($order->recipe_id) ?>

      <ul>
      <li>  {{$recipes->ingredient_1}}  </li>
      <li>  {{$recipes->ingredient_2}} </li>
      <li> {{$recipes->ingredient_3}}</li>
      <li> {{ $recipes->body }} </li>
          </ul> </b>


@endsection