@extends('layouts.app')

@section('title', 'Create a product')

@section('content')
    <h1>Create a product</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::open(array('url' => 'products')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Enter name']) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', '', ['class'=>'form-control', 'placeholder'=>'Enter description']) }}
    </div>

    <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{ Form::text('price', '', ['class'=>'form-control', 'placeholder'=>'Enter price']) }}
    </div>

    {{ Form::submit('Create the product!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection