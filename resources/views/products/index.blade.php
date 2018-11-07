<!-- app/views/products/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
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

    <h1>All the products</h1>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <td>Price</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>

        @foreach($products as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->price }}</td>
                <td>
                    {{ Form::open(array('url' => 'products/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('-', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
                    <a class="btn btn-small btn-success" href="{{ URL::to('products/' . $value->id) }}"><span class="glyphicon glyphicon-eye-open"></span></a>
                    <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $value->id . '/edit') }}"><span class="glyphicon glyphicon-pencil"></span></a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>
</body>
</html>