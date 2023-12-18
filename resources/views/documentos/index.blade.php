<title>Documentos</title>
<body>

    @include('menu')

    <header>
        <h1>Documentos</h1>
    </header>

    <div class="button-container">
        <a href="{{ route('documentos.create') }}">Agregar Documento</a>
    </div>

    <table class="catalog-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Código</th>
                <!-- Agrega más campos según sea necesario -->
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documentos as $documento)
            <tr>
                <td>{{ $documento->id }}</td>
                <td>{{ $documento->nombre }}</td>
                <td>{{ $documento->descripcion }}</td>
                <td>{{ $documento->codigo }}</td>
                <!-- Agrega más columnas según sea necesario -->
                <td>
                    <a href="{{ route('documentos.edit', ['documento' => $documento->id]) }}">Editar</a>
                    <a href="{{ route('documentos.destroy', ['documento' => $documento->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $documento->id }}').submit();">Eliminar</a>
                    <form id="delete-form-{{ $documento->id }}" action="{{ route('documentos.destroy', ['documento' => $documento->id]) }}" method="POST" style="display: none;">
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
