@extends('layouts.app')

@section('titulo','Mis Servicios')

@section('contenido')
<h1>LISTA DE SERVICIOS</h1>
<ul>
    @foreach($servicios as $servicio)
       <table>
          <tr>
            <th>SERVICIOS DISPONIBLES</th>
            <th>STOCK</th>
          </tr>
          <tr>
            <td>{{$servicio->nombre}},{{$servicio->stock}}</td>
          </tr>
       </table>
    @endforeach
</ul>
@endsection
