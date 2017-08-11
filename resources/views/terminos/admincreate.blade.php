@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route' => 'adminterminos.store', 'method' => 'post', 'files' => true])!!}
  @include('alerts.success')
<br>
		<div class="form-group">
		{!!Form::label('terminos', 'Terminos y Condiciones:')!!}
			{!!Form::textarea('nombre',null,['class'=>'form-control ckeditor','placeholder'=>'Ingresa la descripción del restaurante'])!!}
		</div>

       <div class="form-group">
              {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
      </div>

 
    {!!Form::close()!!}

    @endsection