@extends('layouts.app')
@section('titulo', 'Crear Factura')
@section('cabecera', 'Crear Factura')

@section('contenido') 
    <div class="flex justify-center">
        <div class="card w-96 shadow-2xl bg-primary-content">
            <div class="card-body">
                {{-- Formulario para crear un pago --}}
                <form action="{{route('pagos.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{--Valor del Pago --}}
                    <div class="form-control">
                        <label class="label" for="valor_pago">
                            <span class="label-text">Valor a pagar</span>
                        </label>
                        <input type="number" name="valor_pago" placeholder="Escriba el valor del pago" class="input input-bordered" value="{{old('valor_pago')}}" required />
                    </div>
                    {{-- Factura Id --}}
                    <div class="form-control">
                        <label class="label" for="factura_id">
                            <span class="label-text">Factura a pagar</span>
                        </label>
                        <select name="factura_id" class="select select-bordered">
                            @foreach ($facturas as $factura)
                                <option value="{{ $factura->id }}">{{ $factura->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Realizar pago</button>
                        <a href="{{ route('facturas.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection