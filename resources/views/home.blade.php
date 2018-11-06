@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ex in reiciendis! Dolores eum laboriosam nesciunt ut. Ad animi doloribus eligendi maiores nemo officia quis? Cum eum magni odio unde!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection