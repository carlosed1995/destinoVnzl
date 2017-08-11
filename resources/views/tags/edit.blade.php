@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route' => ['tags.update', $tag], 'method' => 'PUT', 'files' => true])!!}
  @include('alerts.success')
<br>
      <div class="form-group">
              {!! Form::label('name', 'Nombre') !!}
              {!!Form::text('name', $tag->name, ['class'=> 'form-control', 'placeholder' => 'Nombre de la etiqueta', 'required' ])!!}
      </div>
       <div class="form-group">
              {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
      </div>
      
 
    {!!Form::close()!!}

    @endsection