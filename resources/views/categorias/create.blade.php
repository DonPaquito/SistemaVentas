<title>Agregar Categoría</title>
<body>
    @include('menu')
    <header>
        <h1>Agregar Categoría</h1>
    </header>

    <div class="form-container">
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" required>

            <button type="submit">Guardar Categoría</button>
        </form>
    </div>

</body>
</html>
