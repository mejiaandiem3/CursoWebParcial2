@extends('layout.interno')
@section('title','Editar Artista')
@section('workspace')
<div class="card">
  <div class="card-header">
    Editar Artista
  </div>
  <div class="card-body">
    
    <p class="card-text">
        <form method="post">
          @csrf
          @method('put')
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{$artista->nombre}}" required>
            <label for="apaterno">Apellido Paterno</label>
            <input type="text" name="apaterno" class="form-control" value="{{$artista->apaterno}}" required>
            <label for="amaterno">Apellido Materno</label>
            <input type="text" name="amaterno" class="form-control" value="{{$artista->amaterno}}" required>
            <label for="resena">Reseña</label>
            <textarea name="resena" class="form-control" id="resena" row="3">
            {{$artista->resena}}
            </textarea>
            <a href="{{route('artistas.index')}}" class="btn btn-secondary">Regresar</a>
            <button class="btn btn-primary">Editar</button>
        </form>
    </p>
    
  </div>
</div>
@endsection