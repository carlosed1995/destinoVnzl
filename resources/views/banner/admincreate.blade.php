@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route' => 'adminbanner.store', 'method' => 'post', 'files' => true])!!}


<br>

		<div class="form-group">
		{!!Form::label('titulo1', 'Titulo Nro 1:')!!}
			{!!Form::textarea('titulo1',null,['class'=>'form-control ckeditor','placeholder'=>'Titulo Nro 1'])!!}
		</div>

		<div class="form-group">
		{!!Form::label('titulo2', 'Titulo Nro 1:')!!}
			{!!Form::textarea('titulo2',null,['class'=>'form-control ckeditor','placeholder'=>'Titulo Nro 1'])!!}
		</div>

<div class="form-group">
	<label>Imagen Banner Nro 1</label>
	<input id="img" name="img" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' >
</div>
       <div class="form-group">
              {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
      </div>

 
    {!!Form::close()!!}

    @endsection