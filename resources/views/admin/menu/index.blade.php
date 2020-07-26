@extends("theme.$theme.layout")


@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Menu</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{{route('crear_menu')}}" class="btn btn-sm btn-outline-secondary">Crear Menu</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
       
    </div>
</div>
@endsection