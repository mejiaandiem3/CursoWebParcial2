@extends('layout.interno')
@section('title','Eliminar Artista')
@section('workspace')
<div class="card">
  <div class="card-header">
    Eliminar Artista
  </div>
  <div class="card-body">
    
    <p class="card-text">
        <div class="alert alert-danger" role="alert">
            Estas seguro que quieres eliminar este registro?
        <hr>
        <table class="table table-sm table-hover">
        <thead>
          <tr>
            <th scope="col" >Id</th>
            <th scope="col" >Nombre(s)</th>
            <th scope="col" >Apellido Paterno</th>
            <th scope="col" >Apellido Materno</th>
            <th scope="col" >Reseña</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td>{{$artista->id}}</td>
          <td>{{$artista->nombre}}</td>
          <td>{{$artista->apaterno}}</td>
          <td>{{$artista->amaterno}}</td>
          <td>{{$artista->resena}}</td>
        <tr>
        </tbody>
      </table>
      <hr>
      <form action='{{url("/destroy/{$artista->id}")}}' method="post">
        @csrf
        @method('delete')
        <a href="{{route('artistas.index')}}" class="btn btn-secondary">Regresar</a>
        <button class="btn btn-danger">Eliminar</button>
      </form>
        </div>
    </p>
    
  </div>
</div>

@endsection