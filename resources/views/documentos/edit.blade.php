<title>Editar Documento</title>
<body>
    @include('menu')
    <header>
        <h1>Editar Documento</h1>
    </header>

    <div class="form-container">
        <form action="{{ route('documentos.update', ['documento' => $documento->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $documento->nombre }}" required>

            <label for="descripcion">Descripción:</label>
            <input type="text" id="descripcion" name="descripcion" value="{{ $documento->descripcion }}" required>

            <label for="codigo">Código:</label>
            <input type="text" id="codigo" name="codigo" value="{{ $documento->codigo }}" required>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit">Actualizar Documento</button>
        </form>
    </div>

</body>
</html>
