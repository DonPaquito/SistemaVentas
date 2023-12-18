<title>Editar Venta</title>
<body>
    @include('menu')
    <header>
        <h1>Mi Dashboard</h1>
    </header>

    <div class="form-container">
        <!-- Corregir la acción del formulario para apuntar a la ruta de actualización -->
        <form action="{{ route('ventas.update', ['venta' => $venta->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="numVenta">Número de Venta:</label>
            <input type="text" id="numVenta" name="numVenta" value="{{ $venta->numVenta }}" required>

            <label for="id_cliente">ID Cliente:</label>
            <input type="text" id="id_cliente" name="id_cliente" value="{{ $venta->id_cliente }}" required>

            <label for="id_vendedor">ID Vendedor:</label>
            <input type="text" id="id_vendedor" name="id_vendedor" value="{{ $venta->id_vendedor }}" required>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" value="{{ $venta->fecha }}" required>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit">Actualizar Venta</button>
        </form>
    </div>

</body>
</html>
