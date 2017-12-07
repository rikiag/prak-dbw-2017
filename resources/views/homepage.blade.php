@extends('layout.template')

@section('content')
    <div class="row">
        <h1>Welcome to Dashboard</h1>
    </div>

    @php
    	$i = 0;
    @endphp
    
    @if (isset($posts))
    	<table class="table table-bordered">
    		<tr>
    			<th>NO</th>
    			<th>Title</th>
    			<th>Action</th>
    		</tr>
	    @forelse ($posts as $post)
			<tr>
				<td>{{ ++$i }}</td>
				<td>
					<a href="{{ route('post.view', $post->id) }}">{{ $post->title }}</a>
				</td>
				<td>
					<a href="">Edit</a> || 
					<a href="">Hapus</a>
				</td>
			</tr>
	    @empty
	    	{{-- empty expr --}}
	    @endforelse
    	</table>
    @endif

@endsection