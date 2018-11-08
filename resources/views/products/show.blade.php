@extends('layouts.app')

@section('content')
    <h1>Showing {{ $product->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $product->name }}</h2>
        <p>
            <strong>Description:</strong> {{ $product->description }}<br>
            <strong>Price:</strong> {{ $product->price }}
        </p>
    </div>
@endsection