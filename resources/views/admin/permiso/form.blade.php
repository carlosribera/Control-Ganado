<div class="form-group">
    <label for="nombre"class="col-lg-3 control-label requerido">Nombre</label>
    <input name="nombre" type="text" class="form-control" id="nombre" value="{{old('nombre', $data->nombre ?? '')}}" required />
</div>
<div class="form-group">
    <label for="slug" class="col-lg-3 control-label requerido">Slug</label>
    <input name="slug" type="text" class="form-control" id="slug" value="{{old('slug', $data->slug ?? '')}}" required />
</div>
