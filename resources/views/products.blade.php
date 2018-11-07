@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    @include('inc.products')
    {!! Form::open(['url' => 'product/submit']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', '', ['class'=>'form-control', 'placeholder'=>'Enter description'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::number('price', '', ['class'=>'form-control', 'placeholder'=>'Enter price'])}}
        </div>
        <div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}

    <hr>

    @if(count($products)>0)
        @foreach($products as $product)
            <ul class="list-group">
                <li class="list-group-item">Name: {{$product->name}}</li>
                <li class="list-group-item">Description: {{$product->description}}</li>
                <li class="list-group-item">Price: {{$product->price}}</li>
            </ul>
        @endforeach
    @endif
@endsection