@extends('layouts.app')
@section('titulo', 'Crear Empresa')
@section('cabecera', 'Crear Empresa')

@section('contenido') 
    <div class="flex justify-center">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                <form action="{{route('empresas.store')}}" method="POST">
                    @csrf
                    <div class="form-control">
	                    <label class="label" for="nombre">
	                        <span class="label-text">Nombre de la empresa</span>
	                    </label>
	                    <input type="text" name="nombre" placeholder="Nombre Empresa" maxlength="100" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label" for="telefono">
                            <span class="label-text">Telefono</span>
                        </label>
                        <input type="text" name="telefono" placeholder="Escriba el telefono" maxlength="255" class="input input-bordered" />
                    </div>
                    <div class="form-control">
                        <label class="label" for="direccion">
                            <span class="label-text">Direccion</span>
                        </label>
                        <input type="text" name="direccion" placeholder="Escriba la direccion" maxlength="255" class="input input-bordered" />
                    </div>
                    <div class="form-control">
                        <label class="label" for="correo">
                            <span class="label-text">Correo</span>
                        </label>
                        <input type="text" name="correo" placeholder="Escriba el correo" maxlength="255" class="input input-bordered" />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Crear Empresa</button>
                        <a href="{{ route('empresas.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection