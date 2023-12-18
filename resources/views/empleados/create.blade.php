<title>Agregar Empleado</title>
<body>
    @include('menu')
    <header>
        <h1>Agregar Empleado</h1>
    </header>

    <div class="form-container">
        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

            <label for="sueldo">Sueldo:</label>
            <input type="text" id="sueldo" name="sueldo" required>

            <label for="id_documento">ID Documento:</label>
            <select id="id_documento" name="id_documento" required>
                @foreach($documentos as $documento)
                    <option value="{{ $documento->id }}">{{ $documento->nombre }}</option>
                @endforeach
            </select>

            <label for="id_ciudad">ID Ciudad:</label>
            <select id="id_ciudad" name="id_ciudad" required>
                @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
                @endforeach
            </select>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit">Guardar Empleado</button>
        </form>
    </div>

</body>
</html>
