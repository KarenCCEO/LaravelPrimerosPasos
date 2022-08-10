<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
    @yield("content")
    {{-- incluyendo un fragmento de codigo de la vista que esta en fragment/ --}}
@include("fragment.subview")
    @if($name == "Karen")
    Es true 
    @else
    No es true
    @endif
    <br>
    {{ $name }}
    {{-- soy un comentario --}}
    
    @foreach ($arrays as $array)
    <p>This is user {{ $array }}</p>
    @endforeach

<hr>
    {{-- usar este loop para cuando existe la posibilidad de tener un datio vacio --}}
    @forelse ($arrayss as $array)
    <li>{{ $array }}</li>
@empty
    <p>No hay informacion en el array</p>
@endforelse



    <p><?= $name ?></p>
   
    <p><?= $age ?></p>
    <p><?= $html ?></p>
</body>
</html>