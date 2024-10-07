@extends('layouts.app')
@section('titulo', 'Listar Clientes')
@section('cabecera', 'Listar Clientes')

@section('contenido')
    <div class="flex justify-end m-4">
        <a href="{{ route('clientes.create') }}" class="btn btn-outline btn-sm">Crear Cliente</a>
    </div>
    <div class="flex justify-center mx-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10">
            @foreach ($clientes as $cliente)
                <div class="card w-64 bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">{{$cliente->nombre}}</h2>
                        
                        <div class="badge badge-success badge-outline">Servicio: {{$cliente->servicio}}</div>
                       
                        <p>{{Str::limit($cliente->direccion, 80)}}</p>

                        {{-- Documento y Barrio--}}
                        <div class="flex space-x-4">
                            <div class="badge badge-neutral">CC:{{number_format($cliente->documento)}}</div>
                            <div class="badge badge-ghost">{{$cliente->barrio}}</div>
                        </div>
                    
                        <div class="card-actions justify-end mt-5">
                            {{-- Editar --}}
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-xs">Editar</a>
                            {{-- Eliminar --}}
                            {{-- Si existen pedidos con este producto no se puede eliminar --}}
                            
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('¿Desea eliminar el cliente {{ $cliente->nombres }}?')" class="btn btn-error btn-xs">Eliminar</button>
                                </form>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection