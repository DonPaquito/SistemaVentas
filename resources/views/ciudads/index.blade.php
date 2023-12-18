<title>Ciudades</title>
<body>

    @include('menu')

    <header>
        <h1>Ciudades</h1>
    </header>

    <div class="button-container">
        <a href="{{ route('ciudads.create') }}">Agregar Ciudad</a>
    </div>

    <table class="catalog-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <!-- Agrega más campos según sea necesario -->
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ciudades as $ciudad)
            <tr>
                <td>{{ $ciudad->id }}</td>
                <td>{{ $ciudad->nombre }}</td>
                <!-- Agrega más columnas según sea necesario -->
                <td>
                    <a href="{{ route('ciudads.edit', ['ciudad' => $ciudad->id]) }}">Editar</a>
                    <a href="{{ route('ciudads.destroy', ['ciudad' => $ciudad->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $ciudad->id }}').submit();">Eliminar</a>
                    <form id="delete-form-{{ $ciudad->id }}" action="{{ route('ciudads.destroy', ['ciudad' => $ciudad->id]) }}" method="POST" style="display: none;">
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
