<title>Lista de Proveedores</title>
<body>

    @include('menu')

    <header>
        <h1>Proveedores</h1>
    </header>

    <div class="button-container">
        <a href="{{ route('proveedores.create') }}">Agregar Proveedor</a>
    </div>

    <table class="catalog-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Documento</th>
                <th>Ciudad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->id }}</td>
                <td>{{ $proveedor->nombre }}</td>
                <td>{{ $proveedor->descripcion }}</td>
                <td>{{ $proveedor->documento ? $proveedor->documento->nombre : 'Sin documento' }}</td>
                <td>{{ $proveedor->ciudad ? $proveedor->ciudad->nombre : 'Sin ciudad' }}</td>
                <td>
                    <a href="{{ route('proveedores.edit', ['proveedor' => $proveedor->id]) }}">Editar</a>
                    <a href="{{ route('proveedores.destroy', ['proveedor' => $proveedor->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $proveedor->id }}').submit();">Eliminar</a>
                    <form id="delete-form-{{ $proveedor->id }}" action="{{ route('proveedores.destroy', ['proveedor' => $proveedor->id]) }}" method="POST" style="display: none;">
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
