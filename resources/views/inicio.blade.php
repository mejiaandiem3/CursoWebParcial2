@extends('layout.interno')
@section('title','Ejemplo de Boostrap')
@section('workspace')
<div class="card">
  <div class="card-header">
  CRUD de artistas
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-sm-12">
        @if ($mensaje = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{$mensaje}}
          </div>
        @endif
      </div>
    </div>
    <h5 class="card-title">Lista de artistas</h5>
    <p>
      <a href="{{ route('artistas.create')}}" class="btn btn-primary">Agregar Artista</a>
    </p>
   <hr>
    <p class="card-text">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" >Id</th>
            <th scope="col" >Nombre(s)</th>
            <th scope="col" >Apellido Paterno</th>
            <th scope="col" >Apellido Materno</th>
            <th scope="col" >Reseña</th>
            <th scope="col" >Editar</th>
            <th scope="col" >Eliminar</th>
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

            <td style="text-align: center;"><a href='{{url("/edit/{$artista->id}")}}'><i class="bi bi-pen"></i></a></td>
            <td style="text-align: center;"><a href='{{url("/show/{$artista->id}")}}'><i class="bi bi-trash-fill"></i></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </p>
   
  </div>
</div>
@endsection

