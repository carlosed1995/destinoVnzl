@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route' => 'adminpreguntas.store', 'method' => 'post', 'files' => true])!!}
  @include('alerts.success')
<br>
		<div class="form-group">
		{!!Form::label('preguntas', 'Preguntas frecuentes:')!!}
			{!!Form::textarea('nombre',null,['class'=>'form-control ckeditor','placeholder'=>'preguntas frecuentes'])!!}
		</div>

       <div class="form-group">
              {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
      </div>

 
    {!!Form::close()!!}

    @endsection