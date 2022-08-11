<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <form action="{{route('post.store')}}" method="post">
        <!--El CSRF es un tipo de exploit malicioso de un sitio web en el 
            que comandos no autorizados son transmitidos por un usuario en 
            el cual el sitio web confía.​ Esta vulnerabilidad es conocida también
             por otros nombres como XSRF, enlace hostil, ataque de un clic, secuestro
              de sesión, y ataque automático. 
            PARA EVITARLO USAR EL @CSRF-->
        @csrf
        <label for"">Título</label>
        <input type="text" name="title">

        <label for"">Slug</label>
        <input type="text" name="slug">

        <label for="">Categoría</label>
        <select name="category_id" >
            <option value=""></option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>

<label for="">Posteado</label>
        <select name="posted" >
            <option value="yes">Si</option>
            <option value="not">no</option>
        </select>

        <label for"">Contenido</label>
        <textarea name="content"></textarea>

        <label for"">descripción </label>
        <textarea name="description"></textarea>

        <button type="submit">Enviar</button>

    
</body>
</html>