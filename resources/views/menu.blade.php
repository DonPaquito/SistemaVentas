<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Enlace al archivo CSS en resources -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<header>
    <div class="logo">
    <img src="{{ asset('img/logo.jpg') }}" alt="Logo">
    <span>Infonet</span>
    </div>
</header>

<nav>
    <a href="{{ route('index') }}"><i class="fas fa-home"></i>Inicio</a>
    <a href="{{ route('ciudads.index') }}"><i class="fas fa-city"></i>Ciudades</a>
    <a href="{{ route('documentos.index') }}"><i class="fas fa-file"></i>Documentos</a>
    <a href="{{ route('clientes.index') }}"><i class="fas fa-person"></i>Clientes</a>
    <a href="{{ route('empleados.index') }}"><i class="fas fa-person"></i>Empleados</a>
    <a href="{{ route('categorias.index') }}"><i class="fas fa-list-ul"></i>Categorias</a>
    <a href="{{ route('componentes.index') }}"><i class="fas fa-microchip"></i>Componentes</a>
    <a href="{{ route('proveedores.index') }}"><i class="fas fa-person"></i>Proveedores</a>
    <a href="{{ route('ventas.index') }}"><i class="fas fa-search"></i>Ventas</a>
</nav>


