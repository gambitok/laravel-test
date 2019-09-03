<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/laravel.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Basicwebsite - @yield('title')</title>
</head>
<body>

@include('inc.navbar')

<div class="container">
    @if(Request::is('/'))
        @include('inc.banner')
    @endif
    @yield('content')
</div>

<footer id="footer" class="text-center">
    <p>Copyright {{ date('Y') }} &copy; Dmitro Dziubii</p>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>

