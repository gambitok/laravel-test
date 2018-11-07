<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/app.css">
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

