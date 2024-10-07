
@extends('layouts.app')

@section('titulo', 'Ordenes')

@section('contenido')
<div class="bg-[#e9d5ff] pt-8 ...">
<div class="flex justify-center">
    <img class="imgtv" width="70" height="60" src="fotos/TV Mojana sin fondo.png">
</div>


<div class="grid grid-cols-1 ms:grid-cols-1 md:grid-cols-1 lg:grid-cols-1">
  <div class="text-center">
    <h1 class="text-2xl font-bold">Ordenes del Dia</h1>
    <h2 class="text-2xl font-bold">Ordenes pendientes</h2>
  </div>
  <br>
  <div>
  <ul>
     <div class="overflow-x-auto">
    <table class="table table-zebra bg-[#fef3c7]">
      
      <thead class="bg-[#3b82f6] text-[20px]">
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>CLIENTE</th>
          <th>DESCRICCION</th>
          <th>TECNICO</th>
          <th>ESTADO</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      @foreach($requerimientos as $requerimiento) 
       <tr>
        <td>{{$requerimiento -> id}}</td>
        <td>{{$requerimiento -> nombre_requerimiento}}</td>
        <td>{{$requerimiento -> empleado_id}}</td>
        <td>{{$requerimiento -> descripcion}}</td>
        <td>{{$requerimiento -> nombre_empleado}}</td>
        <td>{{$requerimiento -> estado}}</td>
        <td><input type="checkbox"></td>
       </tr> 
       @endforeach  
    </tbody>
 </table>
</div>

 <h2 class="text-2xl text-center font-bold">Ordenes realizadas</h2>

 <div class="text-center">
  <ul>
     <div class="overflow-x-auto">
    <table class="table table-zebra bg-[#fef3c7]">
      
      <thead class="bg-[#3b82f6] text-[20px]">
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>CLIENTE</th>
          <th>DESCRICCION</th>
          <th>TECNICO</th>
          <th>ESTADO</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      @foreach($requerimientos as $requerimiento) 
       <tr>
        <td>{{$requerimiento -> id}}</td>
        <td>{{$requerimiento -> nombre_requerimiento}}</td>
        <td>{{$requerimiento -> cliente_id}}</td>
        <td>{{$requerimiento -> descripcion}}</td>
        <td>{{$requerimiento -> nombre_empleado}}</td>
        <td>{{$requerimiento -> estado}}</td>
        <td><input type="checkbox"></td>
       </tr> 
       @endforeach  
    </tbody>
 </table>
</div>
</div>
<div class="flex justify-center">
<button class="btn">Borrar requerimiento</button>
<button class="btn">Realizar requerimiento</button>
<button class="btn"><a href="ordenes.html">Imprimir</a></button>
<button class="btn">Aceptar</button>
<button class="btn">Cancelar</button>
</div>

@endsection