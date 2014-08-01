@extends('layouts.default')

@section('content')
<div class="jumbotron">
    <h1>LaraBook <small>the place for developers</small></h1>
    <p>
        Welcome to <strong>LaraBook</strong>! The place for LaraDevelopers.
    </p>
    <p>
        Take a look around...
    </p>
    <p>
        <a href="{{route('users.create')}}" class="btn btn-lg btn-primary" role="button">Sign Up!</a>
    </p>
</div>
@endsection('content')