<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>

    <a href="/contacto">Contacto</a>
    <!--ruta con nombre -->
    <a href="{{route('contactoNombre')}}">Contacto (ruta con nombre)</a>
    <h1 style="color:blue">Esto es info de la base de datos</h1>
    {{ $user-> name}}
</body>
</html>