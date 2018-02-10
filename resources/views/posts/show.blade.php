@extends('layouts/app')
@section('content')
	<a href="/posts" class="btn btn-default">Go Back</a>
	<h1>{{$post->title}}</h1>
	<div>
		{!!$post->body!!}
	</div>
	<hr>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
			<form action="/posts/{{$post->id}}" method="POST" class="pull-right">
				{{ csrf_field() }}
				{{-- For DELETE requests --}}
				{{-- <input name="_method" type="hidden" value="DELETE"> --}}
				{{ method_field('DELETE') }}
				<input type="submit" class="btn btn-danger" value="Delete">
			</form>
		@endif
	@endif
@endsection