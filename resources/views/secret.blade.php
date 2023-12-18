<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privada</title>
</head>
<body>
    <form method="POST" action="{{route(validar-registro)}}">
        @csrf
        <div class="div">
            <lavel>Pagina Privada</lavel>
        </div>
        <a href="{{route('logout')}}"><button type="submit" class="btn btn-primary">Salir</button></a>
    </form>
</body>
</html>