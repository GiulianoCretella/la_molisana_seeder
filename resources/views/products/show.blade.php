@extends('layouts.default')

@section('PageTitle','La Molisana - Prodotto')

@section('MainContent')
    <h1 class="text-center">{{$product->title}}</h1>
    <div class="container">
        <div class="row text-center">
            <div class="col img-container">
                <img src="{{$product->image}}" alt="{{$product->title}}">
            </div>
            <p>{!!$product->description!!}</p>
        </div>
        
    </div>
@endsection