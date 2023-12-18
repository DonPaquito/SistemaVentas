<title>Editar Categoría</title>
<body>
    @include('menu')
    <header>
        <h1>Editar Categoría</h1>
    </header>

    <div class="form-container">
        <!-- Corregir la acción del formulario para apuntar a la ruta de actualización -->
        <form action="{{ route('categorias.update', ['categoria' => $categoria->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $categoria->nombre }}" required>

            <label for="descripcion">Descripcion:</label>
            <input type="text" id="descripcion" name="descripcion" value="{{ $categoria->descripcion }}" required>

            <button type="submit">Actualizar Categoria</button>
        </form>
    </div>

</body>
</html>
