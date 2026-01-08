@extends('layout')

@section('title', 'Áreas')

@section('content')
  <h1 class="h3 mb-3">Áreas</h1>

    <a href="{{ route('areas.create') }}" class="btn btn-primary mb-3">
        Nueva área
    </a>


  @if($areas->isEmpty())
    <div class="alert alert-info">No hay áreas registradas.</div>
  @else
    <ul class="list-group">
      @foreach($areas as $area)
        <li class="list-group-item">
          <strong>{{ $area->nombre }}</strong>
          @if($area->descripcion)
            <div class="text-muted">{{ $area->descripcion }}</div>
          @endif
        </li>
      @endforeach
    </ul>
  @endif
@endsection
