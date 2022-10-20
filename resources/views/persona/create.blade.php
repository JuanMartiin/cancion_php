@extends('app.base')

@section('content')
<div>
    aquí va el contenido de create, se presenta el formulario con los campos
    que se han de introducir para dar de alta una persona nueva
</div>
<div>
    <form action="{{ url('persona') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">DNI name</label>
            <input value="{{ old('name') }}" required type="text" minlength="2" maxlength="100" class="form-control" id="name" name="name" placeholder="DNI">
            <label for="nombre">Nombre persona</label>
            <input value="{{ old('name') }}" required type="text" minlength="2" maxlength="100" class="form-control" id="name" name="name" placeholder="Nombre persona">
            <label for="nombre">Apellido persona</label>
            <input value="{{ old('name') }}" required type="text" minlength="2" maxlength="100" class="form-control" id="name" name="name" placeholder="Apellido persona">
            <label for="nombre">telefono</label>
            <input value="{{ old('name') }}" required type="text" minlength="2" maxlength="100" class="form-control" id="name" name="name" placeholder="telefono">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">add</button>
        &nbsp;
        <a href="{{ url('persona') }}" class="btn btn-primary">back</a>
    </form>
</div>
@endsection