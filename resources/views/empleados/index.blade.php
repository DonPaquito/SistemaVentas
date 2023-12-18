<title>Lista de Empleados</title>
<body>

    @include('menu')

    <header>
        <h1>Empleados</h1>
    </header>

    <div class="button-container">
        <a href="{{ route('empleados.create') }}">Agregar Empleado</a>
    </div>

    <table class="catalog-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Fecha de Nacimiento</th>
                <th>Sueldo</th>
                <th>Documento</th>
                <th>Ciudad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->apellido }}</td>
                <td>{{ $empleado->direccion }}</td>
                <td>{{ $empleado->fecha_nacimiento }}</td>
                <td>{{ $empleado->sueldo }}</td>
                <td>{{ $empleado->documento ? $empleado->documento->nombre : 'Sin documento' }}</td>
                <td>{{ $empleado->ciudad ? $empleado->ciudad->nombre : 'Sin ciudad' }}</td>
                <td>
                    <a href="{{ route('empleados.edit', ['empleado' => $empleado->id]) }}">Editar</a>
                    <a href="{{ route('empleados.destroy', ['empleado' => $empleado->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $empleado->id }}').submit();">Eliminar</a>
                    <form id="delete-form-{{ $empleado->id }}" action="{{ route('empleados.destroy', ['empleado' => $empleado->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
