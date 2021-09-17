@extends("layouts.master")

@section("principal")
    <form method="post" action="/vendedor">
        @csrf
        <input type="text" name="nombre" placeholder="ingrese nombre" value="{{ old('nombre') }}">
        <input type="text" name="apellido" placeholder="ingrese apellido" value="{{ old('apellido') }}">
        <input type="text" name="dni" placeholder="ingrese dni" value="{{ old('dni') }}">
        <input type="text" name="edad" placeholder="ingrese edad" value="{{ old('edad') }}">
        <input type="text" name="sexo" placeholder="ingrese sexo" value="{{ old('sexo') }}">
        <input type="submit" name="submit" value="Guardar">
    </form>
    @if($errors->any())
        <div style="color:red">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </div>
    @endif
@endsection
