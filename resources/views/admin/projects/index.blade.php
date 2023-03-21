@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
      <div class="row justify-content-center mb-4">
            <div class="col">
                  <h1>Progetti</h1>
                  <a href="{{ route('admin.projects.create') }}" class="btn btn-success">
                        Aggiungi progetto
                  </a>
            </div>
      </div>

      <div class="row">
            @foreach ($projects as $project)
            <div class="col-3 mb-3">
                  <div class="card" style="width: 18rem;">
                        <div class="card-body">
                              <h5 class="card-title">{{ $project->id }} {{ $project->title }}</h5>
                              <h6 class="card-subtitle mb-2 text-muted">{{ $project->slug }}</h6>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                              <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-info">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                              </a>
                              <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">
                                    <i class="fa-solid fa-pen"></i>
                              </a>
                              <a href="#" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                              </a>
                        </div>
                  </div>
            </div>
            @endforeach
      </div>
</div>
@endsection