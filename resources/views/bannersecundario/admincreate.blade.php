@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route' => 'adminbannersec.store', 'method' => 'post', 'files' => true])!!}


<br>

<label>Banner Nro 1</label>

<div class="form-group">
	<div class="nombre">
<label for="nombre" class="col-md-4 control-label">Titulo</label>
<input id="nombre" type="text" class="form-control" placeholder="Titulo" name="titulo1" value="{{ old('nombres') }}" >
<span class="help-block"></span>
	</div>
</div>

<div class="form-group">
	<label>Imagen </label>
	<input id="img1" name="img1" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' >
</div>


<label>Banner Nro 2</label>

<div class="form-group">
	<div class="nombre">
		<label for="nombre" class="col-md-4 control-label">Titulo</label>
		<input id="nombre" type="text" class="form-control" placeholder="Titulo" name="titulo2" value="{{ old('nombres') }}" >
		<span class="help-block"></span>
	</div>
</div>

<div class="form-group">
	<label>Imagen </label>
	<input id="img" name="img2" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' >
</div>


<label>Banner Nro 3</label>

<div class="form-group">
	<div class="nombre">
		<label for="nombre" class="col-md-4 control-label">Titulo</label>
		<input id="nombre" type="text" class="form-control" placeholder="Titulo" name="titulo3" value="{{ old('nombres') }}" >
		<span class="help-block"></span>
	</div>
</div>

<div class="form-group">
	<label>Imagen</label>
	<input id="img3" name="img3" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' >
</div>



<label>Banner Nro 4</label>

<div class="form-group">
	<div class="nombre">
		<label for="nombre" class="col-md-4 control-label">Titulo</label>
		<input id="nombre" type="text" class="form-control" placeholder="Titulo" name="titulo4" value="{{ old('nombres') }}" >
		<span class="help-block"></span>
	</div>
</div>

<div class="form-group">
	<label>Imagen</label>
	<input id="img4" name="img4" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' >
</div>



       <div class="form-group">
              {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
      </div>

 
    {!!Form::close()!!}

    @endsection