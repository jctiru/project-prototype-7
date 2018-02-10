@extends('layouts/app')
@section('content')
	<h1>Create Post</h1>
	<form action="/posts" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Title</label>
			<input placeholder="Title" class="form-control" type="text" name="title" value="{{ old('title') }}">
		</div>
		<div class="form-group">
			<label for="body">Body</label>
			<textarea id="article-ckeditor" placeholder="Body Text" class="form-control" name="body">{{ old('body') }}</textarea>
		</div>
		<input type="submit" class="btn btn-primary" value="Submit">
	</form>
@endsection