@extends('dashboard.layout')
@section('content')
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th>
                Titulo
            </th>
            <th>
                Categoria
            </th>
            <th>
                Posted
            </th>
            <th>
                Acciones
            </th>
        </tr>
        </thead>
        <tbody>
            @foreach($posts as $p)
                <tr>
                    <td>
                        {{$p->title}}
                    </td>
                    <td>
                        categoria
                    </td>
                    <td>
                        {{$p->posted}}
                    </td>
                    <td>
                        acciones
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
