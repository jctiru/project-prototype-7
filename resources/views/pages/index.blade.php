@extends('layouts/app')
@section('content')
	<div class="jumbotron text-center">
		<h1>{{$title}}</h1>
		<p>This is the laravel application from the "Laravel From Scratch" Youtube series</p>
		<p><a class="btn btn-primary btn-lg" role="button" href="/login">Login</a><a class="btn btn-success btn-lg" role="button" href="/register">Register</a></p>
	</div>
@endsection