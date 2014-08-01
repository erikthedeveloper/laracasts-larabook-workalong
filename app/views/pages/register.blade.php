@extends('layouts.default')

@section('content')
<div class="jumbotron">
    <h1>Register <small>for a new LaraBook account</small></h1>
    <p>
        Welcome to <strong>LaraBook</strong>! The place for LaraDevelopers.
    </p>

    {{Form::open([
        'route' => 'users.store',
        'class' => 'form'
    ])}}

    <div class="form-group">
        {{Form::label('username', 'Username:')}}
        {{Form::text('username', null, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('email', 'Email:')}}
        {{Form::text('email', null, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('password', 'Password:')}}
        {{Form::password('password', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('password_confirmation', 'Password Confirmation:')}}
        {{Form::password('password_confirmation', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::submit('Sign Up', ['class' => 'btn btn-lg btn-primary'])}}
    </div>

    {{Form::close()}}

</div>
@endsection('content')