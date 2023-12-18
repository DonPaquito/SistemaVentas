<title>Componentes</title>
<body>
    @include('menu')
    <header>
        <h1>Componentes</h1>
    </header>

    <div class="button-container">
        <a href="{{ route('componentes.create') }}">Agregar Componente</a>
    </div>

    <table class="catalog-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($componentes as $componente)
            <tr>
                <td>{{ $componente->id }}</td>
                <td>{{ $componente->nombre }}</td>
                <td>{{ $componente->descripcion }}</td>
                <td>{{ $componente->precio }}</td>
                <td>{{ $componente->stock }}</td>
                <td>{{ $componente->Categoria->nombre }}</td>
                <td>
                    <a href="{{ route('componentes.edit', ['componente' => $componente->id]) }}">Editar</a>
                    <a href="{{ route('componentes.destroy', ['componente' => $componente->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $componente->id }}').submit();">Eliminar</a>
                    <form id="delete-form-{{ $componente->id }}" action="{{ route('componentes.destroy', ['componente' => $componente->id]) }}" method="POST" style="display: none;">
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
