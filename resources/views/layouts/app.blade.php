<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empresa - @yield('title')</title>
    <!-- Agrega tu hoja de estilo personalizada (styles.css) -->
    <link rel="stylesheet" href="{{ asset('css/styles/styles.css') }}">
</head>

<body>
    <div class="light"></div>

    <div class="top-title">
        <img src="{{ asset('img/imglogin.jpg') }}" alt="Logo de la Empresa" class="logo">
        <h1>Empresa - "Cambien Esto"</h1>
    </div>


    @yield('content')

</body>
<style>
        body {

            background-image: url("{{ asset('img/fondo.jpg') }}");

        }
    </style>

</html>
