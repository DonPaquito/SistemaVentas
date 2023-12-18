<title>Agregar Proveedor</title>
<body>
    @include('menu')
    <header>
        <h1>Agregar Proveedor</h1>
    </header>

    <div class="form-container">
        <form action="{{ route('proveedores.store') }}" method="POST">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>

            <label for="id_documento">Documento:</label>
            <select id="id_documento" name="id_documento" required>
                @foreach($documentos as $documento)
                    <option value="{{ $documento->id }}">{{ $documento->nombre }}</option>
                @endforeach
            </select>

            <label for="id_ciudad">Ciudad:</label>
            <select id="id_ciudad" name="id_ciudad" required>
                @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
                @endforeach
            </select>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit">Guardar Proveedor</button>
        </form>
    </div>

</body>
</html>
