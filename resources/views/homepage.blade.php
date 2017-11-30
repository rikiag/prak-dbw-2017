@extends('layout.template')

@section('content')
    <div class="row">
        <h1>Welcome to Dashboard</h1>
    </div>
    
    @if (isset($posts))
	    @forelse ($posts as $post)
	    	{{ $post->title }}
	    @empty
	    	{{-- empty expr --}}
	    @endforelse
    @endif
@endsection