@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg " href="/login" role="button">Log In</a>
        <a class="btn btn-success btn-lg " href="/register" role="button">Register</a>
</div>


@endsection