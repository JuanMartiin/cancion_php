@extends('app.base')

@section('content')
<div>
    aquí va el contenido de edit, se presenta el formulario con los campos
    que se han de introducir para editar una bicicleta
</div>
<div>
    <form action="{{ url('bike/' . $id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nombre">Persona name</label>
            <input value="{{ old('name', 'persona ' . $id) }}" required type="text" minlength="2" maxlength="100" class="form-control" id="name" name="name" placeholder="Persona name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">edit person</button>
        &nbsp;
        <a href="{{ url('persona') }}" class="btn btn-primary">back</a>
        &nbsp;
        <a href="{{ url('persona/' . $id) }}" class="btn btn-primary">view person</a>
        &nbsp;
        <button type="submit" form="deleteForm" class="btn btn-primary">delete person</button>
    </form>
    &nbsp;
    <form action="{{ url('persona/' . $id) }}" method="post" id="deleteForm">
        @csrf
        @method('delete')
    </form>
</div>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bikeedit.js') }}"></script>
@endsection