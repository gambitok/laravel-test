@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-lg-8">
        @include('inc.messages')
        <h1>Home</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ex in reiciendis! Dolores eum laboriosam nesciunt ut. Ad animi doloribus eligendi maiores nemo officia quis? Cum eum magni odio unde!</p>
    </div>
    <div class="col-md-4 col-lg-4">
        @include('inc.sidebar')
    </div>
@endsection


