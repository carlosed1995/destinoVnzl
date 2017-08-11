@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route' => 'adminmodo.store', 'method' => 'post', 'files' => true])!!}
  @include('alerts.success')
<br>
		<div class="form-group">
		{!!Form::label('modo', 'Modo de uso:')!!}
			{!!Form::textarea('nombre',null,['class'=>'form-control ckeditor','placeholder'=>'preguntas frecuentes'])!!}
		</div>

       <div class="form-group">
              {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
      </div>

 
    {!!Form::close()!!}

    @endsection