@extends('app.base')

@section('content')
    <div class="row" style="margin-top: 8px;">
    aquí va el contenido del index, por ejemplo, listado de bicicletas,
    desde el que se pueden editar, consultar y borrar las bicicletas
    y un enlace para crear bicicletas
    </div>
    <div class="row" style="margin-top: 8px;">
        <table class="table table-striped" id="bikeTable">
            <thead>
                <tr>
                    <th scope="col"># id</th>
                    <th scope="col">bike</th>
                    <th scope="col">delete</th>
                    <th scope="col">edit</th>
                    <th scope="col">show</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        bici 1
                    </td>
                    <td>
                        <a href="javascript: void(0);"
                            class = "deleteRow"
                            data-name="bici 1"
                            data-url="{{ url('bike/1') }}">
                            delete
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('bike/1/edit') }}">edit</a>
                    </td>
                    <td>
                        <a href="{{ url('bike/1') }}">show</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        2
                    </td>
                    <td>
                        bici 2
                    </td>
                    <td>
                        <a href="javascript: void(0);"
                            class = "deleteRow"
                            data-name="bici 2"
                            data-url="{{ url('bike/2') }}">delete</a>
                    </td>
                    <td>
                        <a href="{{ url('bike/2/edit') }}">edit</a>
                    </td>
                    <td>
                        <a href="{{ url('bike/2') }}">show</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <a href="{{ url('bike/create') }}" class="btn btn-success">add bike</a>
    </div>
@endsection

@section('scripts')
<form action="" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
<script src="{{ url('assets/js/bikeindex.js') }}"></script>
@endsection