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
        @foreach ($vendedores as $vendedor)
            <tr>
                <td>{{$vendedor->id}}</td>
                <td>{{$vendedor->nombre}}</td>
                <td>{{$vendedor->apellidos}}</td>
                <td>{{$vendedor->dni}}</td>
                <td>
                    <form method='post' action='vendedor/{{$vendedor->id}}/edit'>
                        <input type='submit' value='actualizar'>
                        @csrf
                        @method("GET")
                    </form>
                </td>
                <td>
                    <form method='post' action='vendedor/{{$vendedor->id}}'>
                        <input type='submit' value='Eliminar'>
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{Route("vendedor.create")}}">Agregar Vendedor</a>
@endsection

@section("js")
    <script>
        alert("Hello");
    </script>
@endsection
