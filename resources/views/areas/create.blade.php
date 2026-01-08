@extends('layout')

@section('title', 'Nueva Área')

@section('content')
  <h1 class="h3 mb-3">Nueva Área</h1>

  <form method="POST" action="{{ route('areas.store') }}" class="card card-body">
    @csrf

    <div class="mb-3">
      <label class="form-label">Nombre *</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Descripción</label>
      <textarea name="descripcion" class="form-control" rows="3"></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Activa</label>
      <select name="activo" class="form-select">
        <option value="1" selected>Sí</option>
        <option value="0">No</option>
      </select>
    </div>

    <button class="btn btn-success">Guardar</button>
    <a href="{{ route('areas.index') }}" class="btn btn-secondary">Cancelar</a>
  </form>
@endsection
