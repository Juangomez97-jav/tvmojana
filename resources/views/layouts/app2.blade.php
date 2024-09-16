<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('titulo','TVMojana')</title>
</head>
<body>
<header>
       {{-- Navbar --}}
       @include('layouts.navbar_inicio')
    </header>
    <main>
       @yield('contenido')
    </main>
    <footer>
       @include('layouts.footer')
    </footer>
    
    
</body>
</html>