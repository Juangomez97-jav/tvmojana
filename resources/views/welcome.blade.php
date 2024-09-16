@extends('layouts.app2')

@section('titulo','Pagina principal')

@section('contenido')
<div class="hero bg-base-250 min-h-screen">
    <div>
     <img src="https://picsum.photos/seed/picsum/100">
    </div>
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="text-center lg:text-left">
      <h1 class="text-2xl font-bold">BIENVENIDO A TV MOJANA SAS</h1>
      <p class="py-6 text-center">
        Comprometidos con el desarrollo de la region.
      </p>
    </div>
  </div>
</div>
@endsection
