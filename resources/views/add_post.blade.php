@extends('layout.template')

@section('content')
<br>
<div class="col-sm-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<label>Add Post</label>
		</div>
		<div class="panel-body">
			<form action="{{ route('post.store') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<p>Title</p>
					<input type="text" class="form-control" name="title" autofocus>
				</div>
				<div class="form-group">
					<textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<div class="form-control">
						<select name="categori" id="categori">
							<option value="1">Laravel</option>
							<option value="2">Belajar</option>
							<option value="3">Praktikum</option>
						</select>
					</div>
				</div>
				<hr>
				<button class="btn btn-info pull-right">Tambah</button>
			</form>
		</div>
	</div>
</div>
@endsection
