@extends('layouts.app')
@section('titulo', 'Actualizar Cliente')
@section('cabecera', 'Actualizar Cliente')

@section('contenido') 
    <div class="flex justify-center">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                {{-- Formulario para crear cliente --}}
                <form action="{{route('clientes.update', $cliente->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                    {{-- Documento --}}
                    <div class="form-control">
                        <label class="label" for="documento">
                            <span class="label-text">Documento</span>
                        </label>
                        <input type="number" name="documento"value="{{ $cliente->documento }}" placeholder="Documento del Cliente" maxlength="100" class="input input-bordered" required />
                    </div>
                    {{-- Nombres --}}
                    <div class="form-control">
                        <label class="label" for="nombres">
                            <span class="label-text">Nombres</span>
                        </label>
                        <input type="text" name="nombres"value="{{ $cliente->nombres }}" placeholder="Nombre del Cliente" maxlength="100" class="input input-bordered" required />
                    </div>
                    {{-- Apellidos --}}
                    <div class="form-control">
                        <label class="label" for="apellidos">
                            <span class="label-text">Apellidos</span>
                        </label>
                        <input type="text" name="apellidos" value="{{ $cliente->apellidos }}" placeholder="Escriba los apellidos" maxlength="255" class="input input-bordered" required />
                    </div>
                    {{-- Telefono --}}
                    <div class="form-control">
                        <label class="label" for="telefono">
                            <span class="label-text">Telefono</span>
                        </label>
                        <input type="number" name="telefono" value="{{ $cliente->telefono }}" placeholder="Escriba el telefono" class="input input-bordered" required />
                    </div>
                    {{-- Barrio --}}
                    <div class="form-control">
                        <label class="label" for="barrio">
                            <span class="label-text">Barrio</span>
                        </label>
                        <input type="text" name="barrio" value="{{ $cliente->barrio }}" placeholder="Escriba el Barrio" class="input input-bordered" required />
                    </div>
                    {{-- calle --}}
                    <div class="form-control">
                        <label class="label" for="calle">
                            <span class="label-text">Calle</span>
                        </label>
                        <input type="number" name="calle" value="{{ $cliente->calle }}" placeholder="Escriba el n° de la Calle" class="input input-bordered" required />
                    </div>
                    {{-- Poste --}}
                    <div class="form-control">
                        <label class="label" for="poste">
                            <span class="label-text">Poste</span>
                        </label>
                        <input type="text" name="poste"value="{{ $cliente->poste }}" placeholder="Escriba el poste" class="input input-bordered" required />
                    </div>
                    {{-- Barrio --}}
                    <div class="form-control">
                        <label class="label" for="correo">
                            <span class="label-text">Correo</span>
                        </label>
                        <input type="email" name="correo" value="{{ $cliente->correo }}" placeholder="Escriba el correo" class="input input-bordered" required />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Actualizar Cliente</button>
                        <a href="{{ route('clientes.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection