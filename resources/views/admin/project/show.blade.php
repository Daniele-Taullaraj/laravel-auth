@extends('layouts.admin')

@section('content')
	<div class="container-fluid mt-4">
		<div class="row justify-content-center">
			<div class="col-md-10 m-3">
				<div class="card">
					<div class="card-header">{{ $project->name }}</div>
					<div class="card-body">
						@if (Str::startsWith($project->img, 'http'))
								<img class="img-fluid mx-auto d-block my-3" src="{{ $project->img }}" alt="">
							@else
								<img class="img-fluid mx-auto d-block my-3" src="{{ asset('storage/' . $project->img) }}" alt="">
							@endif
						<div>{{ $project->description }}</div>
						<div>-Data inizio: {{ $project->start_date }}</div>
						<div>-Data fine: {{ $project->end_date }}</div>
						@if ($project->status)
							<div class="green fw-bold">Completato</div>
						@else
							<div class="red fw-bold">Non Completato</div>
						@endif
						<h4>{{$project->type->name}}</h1>
						<div class="d-flex justify-content-between">
							<div><a href="{{route('admin.project.edit',$project)}}"><button class="btn btn-warning">Modifica</button></a></div>
							<form action="{{ route('admin.project.destroy', $project) }}" method="POST">
								@csrf
								@method('DELETE')
								<div><button type="submit" class="btn btn-danger">Elimina</button></div>
							</form>
							<a href="{{ route('admin.project.index') }}">
								<div><button class="btn btn-primary">Torna alla lista</button></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection
