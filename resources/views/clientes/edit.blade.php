<title>Editar Cliente</title>
<body>
    @include('menu')
    <header>
        <h1>Editar Cliente</h1>
    </header>

    <div class="form-container">
        <!-- Corregir la acción del formulario para apuntar a la ruta de actualización -->
        <form action="{{ route('clientes.update', ['cliente' => $cliente->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="{{ $cliente->apellido }}" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" value="{{ $cliente->direccion }}" required>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $cliente->fecha_nacimiento }}" required>

            <label for="id_documento">Documento:</label>
            <select id="id_documento" name="id_documento" required>
                @foreach($documentos as $documento)
                    <option value="{{ $documento->id }}" @if($documento->id === $cliente->id_documento) selected @endif>{{ $documento->nombre }}</option>
                @endforeach
            </select>

            <label for="id_ciudad">Ciudad:</label>
            <select id="id_ciudad" name="id_ciudad" required>
                @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->id }}" @if($ciudad->id === $cliente->id_ciudad) selected @endif>{{ $ciudad->nombre }}</option>
                @endforeach
            </select>

            <button type="submit">Actualizar Cliente</button>
        </form>
    </div>

</body>
</html>
