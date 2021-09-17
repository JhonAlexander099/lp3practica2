@extends("layouts.master")

@section("principal")
    <h1>{{$titulo}}</h1>
    <table border="1" cellspacing="0">
        <tr>
            <th>id</th>
            <th>nombre comprador</th>
            <th>apellido comprador</th>
            <th>dni comprador</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        @foreach ($compradores as $comprador)
            <tr>
                <td>{{$comprador->id}}</td>
                <td>{{$comprador->nombre}}</td>
                <td>{{$comprador->apellidos}}</td>
                <td>{{$comprador->dni}}</td>
                <td>
                    <form method='post' action='comprador/{{$comprador->id}}/edit'>
                        <input type='submit' value='actualizar'>
                        @csrf
                        @method("GET")
                    </form>
                </td>
                <td>
                    <form method='post' action='comprador/{{$comprador->id}}'>
                        <input type='submit' value='Eliminar'>
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{Route("comprador.create")}}">Agregar Comprador</a>
@endsection

@section("js")
    <script>
        alert("Hello");
    </script>
@endsection
