<title>Agregar Proveedor</title>
<body>
    @include('menu')
    <header>
        <h1>Mi Dashboard</h1>
    </header>

    <div class="form-container">
        <form action="{{ route('proveedores.store') }}" method="POST">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" required>

            <label for="id_ciudad">ID Ciudad:</label>
            <input type="text" id="id_ciudad" name="id_ciudad" required>

            <label for="id_documento">ID Documento:</label>
            <input type="text" id="id_documento" name="id_documento" required>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit">Guardar Proveedor</button>
        </form>
    </div>

</body>
</html>
