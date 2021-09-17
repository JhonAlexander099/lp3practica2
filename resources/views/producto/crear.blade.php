@extends("layouts.master")

@section("principal")
    <form method="post" action="/cursos">
        @csrf
        <input type="text" name="nombre" placeholder="ingrese nombre" value="{{ old('nombre') }}">
        <input type="text" name="precio" placeholder="ingrese precio" value="{{ old('precio') }}">
        <input type="text" name="codigo" placeholder="ingrese codigo" value="{{ old('codigo') }}">
        <input type="text" name="peso" placeholder="ingrese peso" value="{{ old('peso') }}">
        <input type="text" name="categoria" placeholder="ingrese categoria" value="{{ old('categoria') }}">
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
