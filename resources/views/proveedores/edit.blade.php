<title>Editar Proveedor</title>
<body>
    @include('menu')
    <header>
        <h1>Editar Proveedor</h1>
    </header>

    <div class="form-container">
        <form action="{{ route('proveedores.update', ['proveedor' => $proveedor->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $proveedor->nombre }}" required>

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" value="{{ $proveedor->descripcion }}" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" value="{{ $proveedor->direccion }}" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="{{ $proveedor->telefono }}" required>

            <label for="id_documento">ID Documento:</label>
            <select id="id_documento" name="id_documento" required>
                @foreach($documentos as $documento)
                    <option value="{{ $documento->id }}" @if($documento->id === $proveedor->id_documento) selected @endif>{{ $documento->nombre }}</option>
                @endforeach
            </select>

            <label for="id_ciudad">ID Ciudad:</label>
            <select id="id_ciudad" name="id_ciudad" required>
                @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->id }}" @if($ciudad->id === $proveedor->id_ciudad) selected @endif>{{ $ciudad->nombre }}</option>
                @endforeach
            </select>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit">Actualizar Proveedor</button>
        </form>
    </div>

</body>
</html>
