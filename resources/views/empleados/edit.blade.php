<title>Editar Empleado</title>
<body>
    @include('menu')
    <header>
        <h1>Editar Empleado</h1>
    </header>

    <div class="form-container">
        <form action="{{ route('empleados.update', ['empleado' => $empleado->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $empleado->nombre }}" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="{{ $empleado->apellido }}" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" value="{{ $empleado->direccion }}" required>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $empleado->fecha_nacimiento }}" required>

            <label for="sueldo">Sueldo:</label>
            <input type="text" id="sueldo" name="sueldo" value="{{ $empleado->sueldo }}" required>

            <label for="id_documento">ID Documento:</label>
            <select id="id_documento" name="id_documento" required>
                @foreach($documentos as $documento)
                    <option value="{{ $documento->id }}" @if($documento->id === $empleado->id_documento) selected @endif>{{ $documento->nombre }}</option>
                @endforeach
            </select>

            <label for="id_ciudad">ID Ciudad:</label>
            <select id="id_ciudad" name="id_ciudad" required>
                @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->id }}" @if($ciudad->id === $empleado->id_ciudad) selected @endif>{{ $ciudad->nombre }}</option>
                @endforeach
            </select>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit">Actualizar Empleado</button>
        </form>
    </div>

</body>
</html>
