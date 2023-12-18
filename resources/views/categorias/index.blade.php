<title>Categorías</title>
<body>

    @include('menu')

    <header>
        <h1>Categoría</h1>
    </header>

    <div class="button-container">
        <a href="{{ route('categorias.create') }}">Agregar Categoría</a>
    </div>

    <table class="catalog-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->descripcion }}</td>
                <td>
                    <a href="{{ route('categorias.edit', ['categoria' => $categoria->id]) }}">Editar</a>
                    <a href="{{ route('categorias.destroy', ['categoria' => $categoria->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $categoria->id }}').submit();">Eliminar</a>
                    <form id="delete-form-{{ $categoria->id }}" action="{{ route('categorias.destroy', ['categoria' => $categoria->id]) }}" method="POST" style="display: none;">
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
