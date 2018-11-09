<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
@include('inc.navbar')
<div class="container">
    @if(Request::is('/'))
        @include('inc.banner')
    @endif
    <div class="row">
        @yield('content')
    </div>
</div>

<footer id="footer" class="text-center">
    <p>Copyright 2018 &copy; Dzy</p>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>

