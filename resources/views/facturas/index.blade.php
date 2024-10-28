@extends('layouts.app')
@section('titulo', 'Facturacion')
@section('cabecera', 'Facturas')

@section('contenido')
    <div class="flex justify-end m-4">
        <a href="{{ route('facturas.create') }}" class="btn btn-outline btn-sm">Crear Factura</a>
    </div>
    <div class="flex justify-center">
        <div class="overflow-x-auto">
            <table class="table table-zebra">
              <thead class="bg-orange">
                <tr>
                  <th>Nombre de la factura</th>
                  <th>Descripcion</th>
                  <th>precio</th>
                  <th>Servicio</th>
                  <th>Cliente</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($facturas as $factura)
                    <tr>
                        <td>{{ $factura->nombre }}</td>
                        <td>{{ $factura->descripcion }}</td>
                        <td>{{ $factura->precio }}</td>
                        <td>{{$factura->servicio->nombre}}</td>
                        <td>{{ $factura->cliente->nombres}}</td>
                        <td>{{$factura->estado->nombre_estado}}</td>
                        <td class="flex space-x-2">
                            <a href="{{ route('facturas.edit', $factura->id) }}" class="btn btn-warning btn-xs">Editar</a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
@endsection