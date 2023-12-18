<title>Editar Componente</title>
<body>
    @include('menu')
    <header>
        <h1>Mi Dashboard</h1>
    </header>


    <div class="form-container">
        <!-- Corregir la acción del formulario para apuntar a la ruta de actualización -->
        <form action="{{ route('componentes.update', ['componente' => $componente->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $componente->nombre }}" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required>{{ $componente->descripcion }}</textarea>

            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" value="{{ $componente->precio }}" required>

            <label for="stock">Stock:</label>
            <input type="text" id="stock" name="stock" value="{{ $componente->stock }}" required>

            <label for="id_categoria">ID Categoría:</label>
            <input type="text" id="id_categoria" name="id_categoria" value="{{ $componente->id_categoria }}" required>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit">Actualizar Componente</button>
        </form>
    </div>

</body>
</html>
