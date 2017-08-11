@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route' => ['adminpreguntas.update', $preguntasfrecuentes->id], 'method' => 'PUT', 'files' => true])!!}

<br>

      <div class="form-group">
      {!!Form::label('preguntas', 'Preguntas frecuentes:')!!}
        {!!Form::textarea('nombre', $preguntasfrecuentes->preguntas,['class'=>'form-control ckeditor','placeholder'=>'Termino y Condiciones'])!!}
      </div>
       <div class="form-group">
              {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
      </div>   
    {!!Form::close()!!}
    @endsection