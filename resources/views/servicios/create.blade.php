@extends('layouts.app')

@section('titulo', 'Mis servicios | Crear servicio')

@section('contenido')
    <div class="flex justify-center my-6">
        <div class="card bg-base-100 w-96 shadow-2xl">
            <form class="card-body" action="{{ route('servicios.store') }}" method="POST">
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
                 {{-- Empleado --}}
                 <div class="form-control">
                    <label class="label" for="empleado_id">
                        <span class="label-text">Empleado</span>
                    </label>
                    <select name="empleado_id" class="select select-bordered">
                        @foreach ($empleados as $empleado)
                            <option value="{{ $empleado->id }}">{{ $empleado->nombres }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- Nombre --}}
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Nombre</span>
                    </label>
                    <input type="text" name="nombre" placeholder="Nombre del servicio" class="input input-bordered" required />
                </div>
                {{-- Descripción --}}
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Descripción</span>
                    </label>
                    <input type="text" name="descripcion" placeholder="Descripción" class="input input-bordered" />
                </div>
                {{-- Precio --}}
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Precio</span>
                    </label>
                    <input type="number" name="precio" placeholder="Precio" class="input input-bordered" required />
                </div>
                {{-- Estado --}}
                <div class="form-control">
                    <label class="label">
                    <span class="label-text">Estado</span>
                    </label>
                    <input type="text" name="estado" placeholder="Estado" class="input input-bordered" required />
                </div> 
                {{-- botones --}}
                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary">Crear servicio</button>
                    <a href="{{ route('servicios.index')}}" class="btn btn-outline mt-4" >Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection