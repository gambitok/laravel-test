<!-- app/views/products/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('products') }}">product Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('products') }}">View All products</a></li>
            <li><a href="{{ URL::to('products/create') }}">Create a product</a>
        </ul>
    </nav>

    <h1>Create a product</h1>

    {{--{{ HTML::ul($errors->all()) }}--}}

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

</div>
</body>
</html>