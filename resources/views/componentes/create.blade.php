<title>Agregar Componente</title>
<body>
    @include('menu')
    <header>
        <h1>Mi Dashboard</h1>
    </header>

    <div class="form-container">
        <form action="{{ route('componentes.store') }}" method="POST">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>

            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" required>

            <label for="stock">Stock:</label>
            <input type="text" id="stock" name="stock" required>

            <label for="id_categoria">ID Categoría:</label>
            <input type="text" id="id_categoria" name="id_categoria" required>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit">Guardar Componente</button>
        </form>
    </div>

</body>
</html>
