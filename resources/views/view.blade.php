@extends('layout.template')

@section('content')
	<h1>{{ $post->title }}</h1>
	<hr>
	<p>
		{{ $post->content }}
	</p>
@endsection

