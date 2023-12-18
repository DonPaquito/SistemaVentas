<title>Agregar Ciudad</title>
<body>
    @include('menu')
    <header>
        <h1>Agregar Ciudad</h1>
    </header>

    <div class="form-container">
        <form action="{{ route('ciudads.store') }}" method="POST">
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit">Guardar Ciudad</button>
        </form>
    </div>

</body>
</html>
