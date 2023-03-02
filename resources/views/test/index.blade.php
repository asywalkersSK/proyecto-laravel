
@extends("home")

@section("content")
@role("user")
<h1>Usuario</h1>
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
    <div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pregunta</th>
            </tr>
        </thead>
        <tbody>
            @foreach($test as $test)
            <tr>
                <td>{{$test -> id}}</td>
                <td>{{$test -> pregunta}}</td>
            </tr>
            @include("test.modal-info")
            @endforeach
        </tbody>
    </table>
</div>
    </div>
    @endrole
    <br>
    <br>
    @role('admin')
<h1>Admin</h1>
    <h1>Listado de Preguntas</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
    Nuevo
</button>
    <div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pregunta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($test as $test)
            <tr>
                <td>{{$test -> id}}</td>
                <td>{{$test -> pregunta}}</td>
                <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$test->id}}">
                     Editar
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$test->id}}">
                    Eliminar
                </button>
                </td>
            </tr>
            @include("test.modal-info")
            @endforeach
        </tbody>
    </table>
</div>
    @include("test.modal-create")
    </div>
    @endrole
    <div class="col-md-2"></div>
</div>



@endsection
