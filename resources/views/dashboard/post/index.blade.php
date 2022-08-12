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
    {{$posts->links()}}

@endsection

