<div class="navbar bg-[#dc2626]">
  <div class="navbar-start">
    <img width="70" src="fotos/LOGO.png">
    <a class="btn btn-ghost text-xl">JDTV</a>
  </div>
  <div class="navbar-center hidden lg:flex">
  <div tabindex="0" role="button" class="btn m-1"><a href={{route('home')}}>Inicio</a></div>


      <div class="dropdown dropdown-hover">
  <div tabindex="0" role="button" class="btn m-1">Movimientos</div>
  <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a href="{{'recaudo'}}">Recaudo</a></li>
                <li><a href="{{('ordenes')}}">Ordenes del dia</a></li>
                <li><a>Activar servicios</a></li>
                <li><a>Susender servicios</a></li>
  </ul>
</div>

<div class="dropdown dropdown-hover">
  <div tabindex="0" role="button" class="btn m-1">Consultas</div>
  <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
            <li><a>Afiliados</a></li>
            <li><a href="{{'servicios'}}">Servicios</a></li>
            <li><a>Recaudo por dia</a></li>
            <li><a>Servicios vendidos</a></li>
            <li><a href="#">Material</a></li>
            <li><a>Reporte tecnico</a></li>
  </ul>
</div>      
<div class="dropdown dropdown-hover">
  <div tabindex="0" role="button" class="btn m-1">Clientes</div>
  <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
            <li><a>Inscribir cliente</a></li>
            <li><a>Editar cliente</a></li>
            <li><a>Eliminar cliente</a></li>
          </ul>
        </div>
      
        <div class="dropdown dropdown-hover">
  <div tabindex="0" role="button" class="btn m-1">Facturas</div>
  <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
  
            <li><a>Crear factura</a></li>
            <li><a>Editar factura</a></li>
            <li><a>Eliminar factura</a></li>
            <li><a>Facturacion masiva</a></li>
            <li><a>Cobrar material</a></li>
          </ul>
        </div>
      
      <div class="dropdown dropdown-hover">
  <div tabindex="0" role="button" class="btn m-1">Materiales</div>
  <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
            <li><a>Crear material</a></li>
            <li><a>Editar material</a></li>
            <li><a>Ingresar material</a></li>
            <li><a>Eliminar</a></li>
  </ul>
  </div>
  <h3 class="mr-2 font-semibold text-sm"></h3>
</div>