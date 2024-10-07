@extends('layouts.app')
@section('titulo', 'Empresas')
@section('cabecera', 'Empresas')

@section('contenido')
    <div class="flex justify-end m-4">
        <a href="{{ route('empresas.create') }}" class="btn btn-outline btn-sm">Crear Empresa</a>
    </div>
    <div class="flex justify-center">
        <div class="overflow-x-auto">
            <table class="table table-zebra">
              <thead>
                <tr>
                  <th>Nombre de la Empresa</th>
                  <th>Telefono</th>
                  <th>Direccion</th>
                  <th>Correo</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa->nombre }}</td>
                        <td>{{ $empresa->telefono }}</td>
                        <td>{{ $empresa->direccion }}</td>
                        <td>{{ $empresa->correo }}</td>
                        <td class="flex space-x-2">
                            <a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-warning btn-xs">Editar</a>
                            {{-- si la empresa no tiene empleados asociados, se puede eliminar --}}
                            @if($empresa->empleados->count() == 0)
                              <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" onclick="return confirm('¿Desea eliminar la empresa {{ $empresa->nombre }}?')" class="btn btn-error btn-xs">Eliminar</button>
                              </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
@endsection