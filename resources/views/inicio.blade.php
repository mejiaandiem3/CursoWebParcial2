@extends('layout.interno')
@section('title','Ejemplo de Boostrap')
@section('workspace')
<div class="card">
  <div class="card-header">
  CRUD de artistas
  </div>
  <div class="card-body">
    <h5 class="card-title">Lista de artistas</h5>
    <p>
      <a href="{{ route('artistas.create')}}" class="btn btn-primary">Agregar Artista</a>
    </p>
   <hr>
    <p class="card-text">
      <table class="table table-striped"_>
        <thead>
          <tr>
            <th scope="col" >Id</th>
            <th scope="col" >Nombre(s)</th>
            <th scope="col" >Apellido Paterno</th>
            <th scope="col" >Apellido Materno</th>
            <th scope="col" >Reseña</th>
            <th scope="col" >Editar</th>
            <th scope="col" >Elininar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          @foreach ($datos as $artista)
            <td>{{$artista->id}}</td>
            <td>{{$artista->nombre}}</td>
            <td>{{$artista->apaterno}}</td>
            <td>{{$artista->amaterno}}</td>
            <td>{{$artista->resena}}</td>
            <td></td>
            <td></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </p>
   
  </div>
</div>
@endsection

