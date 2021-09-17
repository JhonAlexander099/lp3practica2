@extends("layouts.master")

@section("principal")
    <h1>{{$titulo}}</h1>
    <table border="1" cellspacing="0">
        <tr>
            <th>id</th>
            <th>nombre producto</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>
                    <form method='post' action='producto/{{$producto->id}}/edit'>
                        <input type='submit' value='actualizar'>
                        @csrf
                        @method("GET")
                    </form>
                </td>
                <td>
                    <form method='post' action='producto/{{$producto->id}}'>
                        <input type='submit' value='Eliminar'>
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{Route("producto.create")}}">Agregar Producto</a>
@endsection

@section("js")
    <script>
        alert("Hello");
    </script>
@endsection
