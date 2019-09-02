<div class="jumbotron text-center">
    <div class="container">
        <h1>Welcome</h1>
        <p class="lead">Welcome to our Laravel site, <strong>@guest Guest @else {{ Auth::user()->name }} @endguest</strong> !</p>
    </div>
</div>