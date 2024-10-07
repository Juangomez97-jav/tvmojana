@extends('layouts.app')
@section('titulo', 'Editar Empresa')
@section('cabecera', 'Editar Empresa ' . $empresa->nombre)

@section('contenido')
    <div class="flex justify-center">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                <form action="{{route('empresas.update', $empresa->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-control">
                    <label class="label" for="nombre">
                        <span class="label-text">Nombre</span>
                    </label>
                    <input type="text" name="nombre" placeholder="Nombre de la empresa" class="input input-bordered" maxlength="100" value="{{$empresa->nombre}}" required />
                    </div>
                    <div class="form-control">
                        <label class="label" for="telefono">
                            <span class="label-text">Telefono</span>
                        </label>
                        <input type="text" name="telefono" placeholder="Escriba el telefono" class="input input-bordered" maxlength="255" value="{{$empresa->telefono}}" />
                    </div>
                    <div class="form-control">
                        <label class="label" for="direccion">
                            <span class="label-text">Direccion</span>
                        </label>
                        <input type="text" name="direccion" placeholder="Escriba la direccion" class="input input-bordered" maxlength="255" value="{{$empresa->direccion}}" />
                    </div>
                    <div class="form-control">
                        <label class="label" for="corre">
                            <span class="label-text">Correo</span>
                        </label>
                        <input type="email" name="correo" placeholder="Escriba el correo" class="input input-bordered" maxlength="255" value="{{$empresa->correo}}" />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Actualizar Empresa</button>
                        <a href="{{ route('empresas.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection