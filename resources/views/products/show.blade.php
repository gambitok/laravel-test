@extends('layouts.app')

@section('title', "Display $product->name")

@section('content')
    <h1>Display {{ $product->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $product->name }}</h2>
        <p>
            <strong>Description:</strong> {{ $product->description }}<br>
            <strong>Price:</strong> {{ $product->price }}
        </p>
    </div>
@endsection