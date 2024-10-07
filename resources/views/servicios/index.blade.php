@extends('layouts.app')

@section('titulo','Servicios')
@section('cabecera', 'Servicios')
@section('contenido')
<br>
<div class="grid grid-cols-1 ms:grid-cols-1 md:grid-cols-1 lg:grid-cols-1">
<div class="text-center">
      <h1 class="text-2xl font-bold">SERVICIOS</h1>
</div>
<br>
<div>
<ul>
   <div class="overflow-x-auto">
  <table class="table table-zebra bg-[#fef3c7]">
    
    <thead class="bg-[#3b82f6] text-[20px]">
      <tr>
        <th>Empresa</th>
        <th>NOMBRE</th>
        <th>DESCRICCION</th>
        <th>ESTADO</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach($servicios as $servicio)
      <tr>
        <td>{{ $servicio->empresa->nombre }}</td>
        <td>{{$servicio->nombre}}</td>
        <td>{{Str::limit($servicio->descripcion, 50)}}</td>
        <td>{{$servicio->estado}}</td>
        <td><div class="card-actions justify-center">
      <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-outline btn-xs">Editar</a>
      <form action="{{route('servicios.destroy', $servicio->id)}}" method="POST">
         @csrf 
         @method("DELETE")
         <button type="submit"class="btn btn-outline btn-xs">Eliminar</button>
      </form>
    </div></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> 
</ul>
</div>
</div>
<br>
<div class="flex justify-center">
  <a href="{{route('servicios.create')}}" class="btn btn-succes bg-green-300">Crear nuevo servicio</a>
</div>
<br>

@endsection