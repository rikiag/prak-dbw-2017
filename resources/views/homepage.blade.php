@extends('layout.template')

@section('content')
    <div class="row">
        <h1>Welcome to Dashboard</h1>
    </div>
    
    @forelse ($posts as $post)
    	{{ $post->title }}
    @empty
    	{{-- empty expr --}}
    @endforelse
@endsection