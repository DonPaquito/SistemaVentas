<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Enlace al archivo CSS en resources -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include("menu")
    <div class="description">
        <p>Somos una empresa dedicada a la venta de computadoras y componentes. Ofrecemos una amplia variedad de productos para satisfacer tus necesidades tecnológicas.</p>
    </div>

    <!-- Agregar la imagen horizontal después de la descripción -->
    <div class="horizontal-image">
        <img src="{{ asset('img/imagen_horizontal.jpeg') }}" alt="Imagen Horizontal">
    </div>


    <!-- Contenido de la página -->

</body>
</html>
