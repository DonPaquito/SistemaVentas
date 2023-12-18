<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Enlace al archivo CSS en resources -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('menu')
    <header>
        <h1>Ventas</h1>
    </header>

    <div class="button-container">
        <a href="{{ route('ventas.create') }}">Realizar Nueva Venta</a>
    </div>

    <table class="catalog-table">
        <thead>
            <tr>
                <th>ID Venta</th>
                <th>Número de Venta</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->id }}</td>
                <td>{{ $venta->numVenta }}</td>
                <td>{{ $venta->cliente->nombre }}</td>
                <td>{{ $venta->fecha }}</td>
                <td>
                    <a href="{{ route('ventas.show', ['venta' => $venta->id]) }}">Ver Detalles</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
