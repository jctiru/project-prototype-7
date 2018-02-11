@extends('layouts/app')
@section('content')
	<h1>Create Post</h1>
	<form action="/posts" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="title">Title</label>
			<input placeholder="Title" class="form-control" type="text" name="title" value="{{ old('title') }}">
		</div>
		<div class="form-group">
			<label for="body">Body</label>
			<textarea id="article-ckeditor" placeholder="Body Text" class="form-control" name="body">{{ old('body') }}</textarea>
		</div>
		<div class="form-group">
			<input type="file" name="cover_image" accept="image/*"  class="form-control-file form-control-sm">
		</div>
		<input type="submit" class="btn btn-primary" value="Submit">
	</form>
@endsection