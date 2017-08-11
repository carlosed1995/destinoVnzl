@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route' => ['adminmodo.update', $modo->id], 'method' => 'PUT', 'files' => true])!!}

<br>

      <div class="form-group">
      {!!Form::label('modo', 'Modo de uso:')!!}
        {!!Form::textarea('nombre', $modo->modo,['class'=>'form-control ckeditor','placeholder'=>'Modo de uso'])!!}
      </div>
       <div class="form-group">
              {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
      </div>   
    {!!Form::close()!!}
    @endsection