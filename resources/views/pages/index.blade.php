@extends('layouts.app')

@section('content')  
    <br>
    <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>this is the laravel app</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role='button'>Login</a> <a class="btn btn-success btn-lg" href="/register" role='button'>Register</a></p>
    </div>
@endsection    
