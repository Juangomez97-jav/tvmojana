@extends('layouts.app')
@section('titulo', 'Mis Clientes')
@section('cabecera', 'Clientes')

@section('contenido')
    <div class="flex justify-end m-4">
        <a href="{{ route('clientes.create') }}" class="btn btn-outline btn-sm">Nuevo Cliente</a>
    </div>
    <div class="flex justify-center">
        <div class="overflow-x-auto">
            <table class="table table-zebra">
              <thead>
                <tr>
                  <th>Nombre del cliente</th>
                  <th>Apellidos</th>
                  <th>Documento</th>
                  <th>Barrio</th>
                  <th>Calle</th>
                  <th>Poste</th>
                  <th>Servicio</th>
                  <th>Saldo</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nombres}}</td>
                        <td>{{ $cliente->apellidos}}</td>
                        <td>{{ $cliente->documento}}</td>
                        <td>{{ $cliente->barrio}}</td>
                        <td>{{ $cliente->calle}}</td>
                        <td>{{ $cliente->poste}}</td>
                        <td>{{$cliente->servicio->nombre}}</td>
                        <td></td>
                        <td class="flex space-x-2">
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-xs">Editar</a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
@endsection
