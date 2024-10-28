@extends('layouts.app')
@section('titulo', 'Crear Factura')
@section('cabecera', 'Crear Factura')

@section('contenido') 
    <div class="flex justify-center">
        <div class="card w-96 shadow-2xl bg-primary-content">
            <div class="card-body">
                {{-- Formulario para crear cliente --}}
                <form action="{{route('facturas.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- Empresa --}}
                    <div class="form-control">
                        <label class="label" for="empresa_id">
                            <span class="label-text">Empresa</span>
                        </label>
                        <select name="empresa_id" class="select select-bordered">
                            @foreach ($empresas as $empresa)
                                <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Servicio --}}
                    <div class="form-control">
                        <label class="label" for="servicio_id">
                            <span class="label-text">Servicio</span>
                        </label>
                        <select name="servicio_id" class="select select-bordered">
                            @foreach ($servicios as $servicio)
                                <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Cliente --}}
                    <div class="form-control">
                        <label class="label" for="cliente_id">
                            <span class="label-text">Cliente</span>
                        </label>
                        <select name="cliente_id" class="select select-bordered">
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id }}">{{ $cliente->nombres }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Nombre de la factura --}}
                    <div class="form-control">
                        <label class="label" for="nombre">
                            <span class="label-text">Nombre</span>
                        </label>
                        <input type="text" name="nombre" placeholder="Nombre de la factura" maxlength="100" class="input input-bordered" value="{{old('nombre')}}" required />
                    </div>
                    {{-- Descripcion --}}
                    <div class="form-control">
                        <label class="label" for="descripcion">
                            <span class="label-text">Descripcion</span>
                        </label>
                        <input type="text" name="descripcion" placeholder="Descripcion de la factura" maxlength="100" class="input input-bordered" value="{{old('descripcion')}}" required />
                    </div>
                    {{-- Precio --}}
                    <div class="form-control">
                        <label class="label" for="precio">
                            <span class="label-text">Precio</span>
                        </label>
                        <input type="number" name="precio" placeholder="Escriba el precio" class="input input-bordered" value="{{old('telefono')}}" required />
                    </div>
                    {{-- Estado --}}
                    <div class="form-control">
                        <label class="label" for="estado_id">
                            <span class="label-text">Estado</span>
                        </label>
                        <select name="estado_id" class="select select-bordered">
                            @foreach ($estados as $estado)
                                <option value="{{ $estado->id }}">{{ $estado->nombre_estado }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Crear Factura</button>
                        <a href="{{ route('facturas.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection