<title>Editar Ciudad</title>
<body>
    @include('menu')
    <header>
        <h1>Editar Ciudad</h1>
    </header>

    <div class="form-container">
        <form action="{{ route('ciudads.update', ['ciudad' => $ciudad->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $ciudad->nombre }}" required>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit">Actualizar Ciudad</button>
        </form>
    </div>

</body>
</html>
