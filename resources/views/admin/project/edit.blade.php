@extends('layouts.admin')

@section('content')
	<div class="container mt-5">
		<h2>Stai modificando: {{ $project->name }}</h2>

		<form action="{{ route('admin.project.update', $project) }}" method="POST">
			@method('PUT')
			@csrf
			<div class="form-group">
				<label for="name">Nameeee:</label>
				<input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}" required>
				@error('name')
				<div class="text-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="form-group mt-3">
				<label for="description">Description:</label>
				<textarea class="form-control" id="description" name="description" rows="3" required>{{ $project->description }}</textarea>
			</div>

			<div class="form-group mt-3">
				<label for="img">Image:</label>
				<input type="file" name="img" id="img" class="form-control" >
			</div>


			<div class="form-group mt-3">
				<label for="start_date">Start Date:</label>
				<input type="date" class="form-control" id="start_date" name="start_date" value="{{ $project->start_date }}"
					required>
			</div>

			<div class="form-group mt-3">
				<label for="end_date">End Date:</label>
				<input type="date" class="form-control" id="end_date" name="end_date" value="{{ $project->end_date }}">
			</div>

			<div class="form-group mt-3">
                <label for="type_id">Type:</label>
                <select name="type_id" id="type_id" class="form-control">
                    @foreach ($type as $singleType)
                        <option value="{{ $singleType->id }}" {{ $project->type_id == $singleType->id ? 'selected' : '' }}>{{ $singleType->name }}</option>
                    @endforeach
                </select>
               
            </div>

			<button type="submit" class="btn btn-primary mt-3 d-block">Modifica Progetto</button>
		</form>
	</div>
@endsection
