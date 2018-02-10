@extends('layouts/app')
@section('content')
	<h1>Edit Post</h1>
	<form action="/posts/{{$post->id}}" method="POST">
		{{ csrf_field() }}
		{{-- For PUT requests --}}
		{{-- <input name="_method" type="hidden" value="PUT"> --}}
		{{ method_field('PUT') }}
		<div class="form-group">
			<label for="title">Title</label>
			<input placeholder="Title" class="form-control" type="text" name="title" value="{{$post->title}}">
		</div>
		<div class="form-group">
			<label for="body">Body</label>
			<textarea id="article-ckeditor" placeholder="Body Text" class="form-control" name="body">{{$post->body}}</textarea>
		</div>
		<input type="submit" class="btn btn-primary" value="Submit">
	</form>
@endsection