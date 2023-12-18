<title>Clientes</title>
<body>

    @include('menu')

    <header>
        <h1>Clientes</h1>
    </header>

    <div class="button-container">
        <a href="{{ route('clientes.create') }}">Agregar Cliente</a>
    </div>

    <table class="catalog-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Fecha de Nacimiento</th>
                <th>Documento</th>
                <th>Ciudad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellido }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>{{ $cliente->fecha_nacimiento }}</td>
                <td>{{ $cliente->Documento ? $cliente->Documento->nombre : 'Sin documento' }}</td>
                <td>{{ $cliente->Ciudad ? $cliente->Ciudad->nombre : 'Sin ciudad' }}</td>
                <td>
                    <a href="{{ route('clientes.edit', ['cliente' => $cliente->id]) }}">Editar</a>
                    <a href="{{ route('clientes.destroy', ['cliente' => $cliente->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $cliente->id }}').submit();">Eliminar</a>
                    <form id="delete-form-{{ $cliente->id }}" action="{{ route('clientes.destroy', ['cliente' => $cliente->id]) }}" method="POST" style="display: none;">
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
