@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
      <div class="row justify-content-center mb-4">
            <div class="col">
                  <h1>Crea Project</h1>
                  <a href="{{ route('admin.projects.index') }}" class="btn btn-info">
                        Torna indietro
                  </a>
            </div>
      </div>

      @if ($errors->any())
            <div class="row mb-4">
                  <div class="col">
                        <div class="alert alert-danger">
                              <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                              </ul>
                        </div>
                  </div>
            </div>
      @endif

      <div class="row mb-4">
            <div class="col">
                  <form action="{{ route('admin.projects.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                              <label for="title" class="form-label">Titolo</label>
                              <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del progetto..." required maxlength="128">
                        </div>
                        
                        <div class="mb-3">
                              <label for="description" class="form-label">Descrizione</label>
                              <textarea class="form-control" id="description" name="description" placeholder="Inserisci descrizione del progetto..." rows="10" required maxlength="4096"></textarea>
                        </div>

                        <div>
                              <button type="submit" class="btn btn-success">
                                    Crea
                              </button>
                        </div>
                  </form>
            </div>
      </div>
</div>
@endsection