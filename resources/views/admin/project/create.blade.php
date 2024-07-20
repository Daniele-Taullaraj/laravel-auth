@extends('layouts.admin')

@section('content')
	<div class="container mt-5">
		<h2>Crea nuovo progetto</h2>

		@if ($errors->any())
			<div class="alert alert-danger">
    			<ul>
        		@foreach ($errors->all() as $error)
       			 	<li>{{ $error }}</li>
       			@endforeach
    			</ul>
			</div>
		@endif

		<form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
			</div>


			<div class="form-group mt-3">
				<label for="description">Description:</label>
				<textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
			</div>

			<div class="form-group mt-3">
				<label for="img">Image:</label>
				<input type="file" name="img" id="img" class="form-control">
			</div>

			<div class="mb-3">
				<label for="type_id" class="form-label">Type of project</label>
				<select class="form-select " name="type_id" id="type_id">
	
					@forelse ($type as $technology )
					<option value="{{$technology->id}}">{{$technology->name}}</option>
					@empty
	
					<option selected>Select one</option>
					@endforelse
	
				</select>
			</div>


			<div class="form-group mt-3">
				<label for="start_date">Start Date:</label>
				<input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}"
					required>
			</div>

			<div class="form-group mt-3">
				<label for="end_date">End Date:</label>
				<input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date') }}">
			</div>



			<button type="submit" class="btn btn-primary mt-3">Crea Progetto</button>
		</form>
	</div>
@endsection
