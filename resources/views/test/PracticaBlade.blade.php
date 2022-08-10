@extends('layout.master')
@section('content')
{{-- incluyendo un fragmento de codigo de la vista que esta en fragment/ --}}
@include("fragment.subview")
    
    {{-- usar este loop para cuando existe la posibilidad de tener un datio vacio --}}
    @forelse ($arrays as $array)
    <li>{{ $array }}</li>
@empty
    <p>No hay informacion en el array</p>
@endforelse

@endsection