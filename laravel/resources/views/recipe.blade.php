
@extends('layouts.app')
@section('content')

    
<?php use App\Http\Controllers\Controller;
use App\Recipe as Recipe;
use App\Order as Order; ?>
<?php $orders = Order::all(); ?>
@foreach($orders as $order);
        <div class="row container">
            <div class="col-lg-7" id="order-container">
                <div class="bs-component">
                    <blockquote>
                        <p>{{$order->name}}</p><a href="./recepta/{{$order->id}}" class="btn btn-primary btn-xs">Show
                            recipe</a>
                        <small><cite title="Source Title">{{$order->id}}</cite></small>
                    </blockquote>
                </div>
            </div>
            {{--</div>--}}
            {{--</div>--}}
        </div>
    @endforeach
@endsection