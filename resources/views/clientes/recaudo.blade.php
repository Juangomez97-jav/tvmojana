@extends('layouts.app')

@section('titulo', 'Recaudo')

@section('contenido')
<div class="bg-[#e9d5ff] pt-8 ...">
<div class="flex justify-center">
    <img class="imgtv" width="70" height="60" src="fotos/TV Mojana sin fondo.png">
</div>
<br>



<div>
  <div class="table">
    <table class="table">
      
        @foreach ($clientes as $cliente)
          
        
        
        <tr>
          <th class="text-end"><label class="form-label">Codigo</label></th>
             <td>
                <label for="Cliente_id">
                     <input type="text" name="buscar" id="buscar"/>
                     <button ondblclick="buscar" class="btn btn-submit btn-xs" value="Buscar">Buscar</button>
                </label>
                <!-- Mostrar error si no se encuentra el cliente -->
                  @if (session('error'))
                    <p style="color:red;">{{ session('error') }}</p>
                  @endif
            </td>
           
          <th class="text-end">Telefono</th>
            <td><input
            type="text"
            class="grow"
            disabled placeholder="{{$cliente -> telefono}}"/><//></td>
          <th class="text-end">Fecha</th>
            <td><input
            type="text"
            class="grow"
            disabled placeholder=""/></td>
        </tr>
        <tr>
          <th class="text-end">Nombres</th>
          <td><input
            type="text"
            class="grow"
            disabled placeholder="{{$cliente -> nombres}}"/><//></td>
          <th class="text-end">Barrio</th>
          <td><input
            type="text"
            class="grow"
            disabled placeholder="{{$cliente -> barrio}}"/><//></td>
          <th class="text-end">Servicio</th>
          <td><input
            type="text"
            class="grow"
            disabled placeholder="{{$cliente -> servicio_id}}" /></td>
        </tr>
        <tr>
          <th class="text-end">Apellidos</th>
          <td><input
            type="text"
            class="grow"
            disabled placeholder="{{$cliente -> apellidos}}"/><//></td>
          <th class="text-end">Calle</th>
          <td><input
            type="text"
            class="grow"
            disabled placeholder="{{$cliente -> calle}}"/><//></td>
          <th class="text-end">Estado</th>
          <td><input
            type="text"
            class="grow"
            disabled placeholder="{{$cliente -> estado}}"/><//></td>
        </tr>
        <tr>
          <th class="text-end">Documento</th>
          <td><input
            type="text"
            class="grow"
            disabled placeholder="{{$cliente -> documento}}"/><//></td>
          <th class="text-end">Poste</th>
          <td><input
            type="text"
            class="grow"
            disabled placeholder="{{$cliente -> poste}}"/></td>
        </tr>
        @endforeach
    </table>
  </div>
  <br>
  <div class="flex justify-center mr-4 ...">
    <div class="mr-8 ...">
    <a href="#" class="btn btn-outline btn-xs px-2 ...">Reuerimiento</a>
    </div>
    <div class="mr-8 ...">
    <a href="#" class="btn btn-outline btn-xs">Actualizar Datos</a>
    </div>
    <div class="mr-8 ...">
    <a href="#" class="btn btn-outline btn-xs">Historial de Pagos</a>
    </div>
    <div class="mr-8 ...">
    <a href="#" class="btn btn-outline btn-xs">Factura</a>
    </div>
  </div>
  <br>
  <div class="flex justify-center">
    <table>
    <tr>
        <th>Saldo pendiente</th>
          <td><input
            type="text"
            class="grow mr-8 ..."
            disabled /></td>
        <th>Efectivo</th>
            <td>
               <label>
                    <input type="text" class="grow mr-8 ..." placeholder="" />
               </label>
         </td>
         <th>Valor a pagar</th>
            <td>
               <label>
                    <input type="text" class="grow mr-8 ..." placeholder="" />
               </label>
         </td>
           <th>Bueltas</th>
           <td><input
             type="text"
             class="grow"
             disabled /></td>
    </tr>
    </table>
  </div>
  <br>
  <div class="flex justify-center pb-8 ...">
      <div class="mr-8 ...">
        <a href="#" class="btn btn-outline btn-xs bg-[#22c55e]">Realizar pago</a>
           </div>
           <div class="mr-8 ...">
        <a href="#" class="type submit btn btn-outline btn-xs bg-[#dc2626]">Cancelar</a>
      </div>
  </div>
</div>
</div>

@endsection