@extends("theme.$theme.layout")


@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Permisos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{{route('crear_permiso')}}" class="btn btn-sm btn-outline-secondary">Crear permiso</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre </th>
                            <th>Slug</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permisos as $permiso)
                        <tr>
                            <td>{{$permiso->id}}</td>
                            <td>{{$permiso->nombre}}</td>
                            <td>{{$permiso->slug}}</td>
                            <td>
                                <a href="{{route("editar_permiso", ['id' => $permiso->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <span data-feather="edit"></span>
                                </a>
                                <form action="{{route("eliminar_permiso",  ['id' => $permiso->id])}}" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                    <span data-feather="trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection