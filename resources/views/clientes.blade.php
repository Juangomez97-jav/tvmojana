@extends('layouts.app')

@section('titulo','Mis clientes')

@section('contenido')
<h1>LISTA DE CLIENTES</h1>
<ul>
    @foreach($clientes as $cliente)
       <table>
          <tr>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th>BARRIO</th>
            <th>CALLE</th>
            <th>POSTE</th>
          </tr>
          <tr>
            <td>{{$cliente->nombres}}</td>
            <td>{{$cliente->apellidos}}</td>
            <td>{{$cliente->barrio}}</td>
            <td>{{$cliente->calle}}</td>
            <td>{{$cliente->poste}}</td>
          </tr>
       </table>
    @endforeach
</ul>
@endsection