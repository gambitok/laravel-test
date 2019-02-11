@extends('layouts.app')

@section('content')
    <h1>All the products</h1>

    <a class="btn btn-small btn-success" href="{{ URL::to('products/create') }}"><span class="glyphicon glyphicon-plus"></span> Add product</a>
    {{ Form::open(array('url' => 'products/truncate', 'class' => 'd-inline')) }}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::button('<span class="glyphicon glyphicon-remove"></span> Clear products', array('type' => 'submit','class' => 'btn btn-small btn-danger')) }}
    {{ Form::close() }}
    <br><br>

    @if(session('message'))
        <div class="alert alert-info">
            {{session('message')}}
        </div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Price</td>
            <td width="200px">Actions</td>
        </tr>
        </thead>
        <tbody>

        @foreach($products as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->price }}</td>
                <td align="center">
                    <a class="btn btn-small btn-warning" href="{{ URL::to('products/' . $value->id) }}"><span class="glyphicon glyphicon-eye-open"></span></a>
                    <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $value->id . '/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
                    {{ Form::open(array('url' => 'products/' . $value->id, 'style' => 'display:inline;')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::button('<span class="glyphicon glyphicon-minus"></span>', array('type' => 'submit','class' => 'btn btn-small btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection