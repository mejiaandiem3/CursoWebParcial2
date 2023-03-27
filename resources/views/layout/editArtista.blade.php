@extends('layout.interno')
@section('title','Editar Artista')
@section('workspace')
<div class="card">
  <div class="card-header">
    Editar Artista
  </div>
  <div class="card-body">
    
    <p class="card-text">
        <form action="#">
          @csrf
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="">Apellido Paterno</label>
            <input type="text" name="aparternol" class="form-control" required>
            <label for="">Apellido Materno</label>
            <input type="text" name="amaternol" class="form-control" required>
            <label for="">Reseña</label>
            <textarea name="resena" class="form-control" id="resena" row="3"></textarea>
            <a href="{{route('artistas.index')}}" class="btn btn-secondary">Regresar</a>
            <button class="btn btn-primary">Editar</button>


        </form>
    </p>
    
  </div>
</div>
@endsection