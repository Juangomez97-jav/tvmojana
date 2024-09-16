@extends('layouts.app')

@section('titulo','Mis Servicios')

@section('contenido')
<h1 class="text-blue-700 text-3xl text-center">LISTA DE SERVICIOS</h1>

    @foreach($servicios as $servicio)
    <div class="overflow-x-auto">
  <table class="table table-zebra">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>SERVICIO</th>
        <th>DESCRIPCION</th>
        <th>PRECIO</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>1</th>
        <td>{{$servicio->nombre}}</td>
        <td>{{$servicio->descripcion}}</td>
        <td>{{$servicio->precio}}</td>
      </tr>
    </tbody>
  </table>
</div>
    @endforeach

@endsection
