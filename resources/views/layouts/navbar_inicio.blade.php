<div class="navbar bg-base-100">
  <div class="flex-1">
    <a class="btn btn-ghost text-xl">JDTV</a>
  </div>
  <!-- Open the modal using ID.showModal() method -->
<button class="btn" onclick="my_modal_2.showModal()">Iniciar sesion</button>
<dialog id="my_modal_2" class="modal">
  
  <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
      <form class="card-body">
       <div class="flex-none">
       <ul class="menu menu-horizontal px-1">
       <li>
       <form action="#" class="bg-base-100 rounded-t-none p-2" required>
         <label for="text">Sucursal</label>
         <select name="sucursal" id="text">
             <option value="majagual">Majagual</option>
             <option value="guaranda">Guaranda</option>
         </select>
       </from>
       </li>
       </ul>
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Correo</span>
          </label>
          <input type="email" placeholder="Ingrese su correo" class="input input-bordered" required />
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">Clave</span>
          </label>
          <input type="password" placeholder="Ingrese su clave" class="input input-bordered" required />
          <label class="label">
            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
          </label>
        </div>
        <div class="form-control mt-6">
          <button class="btn btn-primary"><a href="servicios">Ingresar</a></button>
        </div>
      </form>
    
  </div>
  <form method="dialog" class="modal-backdrop">
    <button>cerrar</button>
  </form>
</dialog>
</div>