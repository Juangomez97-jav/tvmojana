@extends('layouts.app')

@section('titulo','Pagina principal')

@section('contenido')
<div class="hero bg-base-250 min-h-screen">
    
  <div class="hero-content">
    
    <div class="text-center lg:text-left">
      <div class="flex justify-center">
        <img width="200" src="fotos/TV Mojana sin fondo.png">
      </div>
      <br>
      <h3 class="mr-4 font-semibold text-sl text-center">{{ auth()->user()->name }}</h3>
      <h1 class="text-2xl font-bold">BIENVENIDO A TV MOJANA SAS</h1>
      <p class="py-6 text-center">
        Comprometidos con el desarrollo de la region.
      </p>
    </div>
  </div>
</div>
@endsection
