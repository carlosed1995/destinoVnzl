@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route' => ['adminterminos.update', $terminos->id], 'method' => 'PUT', 'files' => true])!!}

<br>

      <div class="form-group">
      {!!Form::label('terminos', 'Terminos y Condiciones:')!!}
        {!!Form::textarea('nombre', $terminos->terminoscond,['class'=>'form-control ckeditor','placeholder'=>'Termino y Condiciones'])!!}
      </div>
       <div class="form-group">
              {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
      </div>   
    {!!Form::close()!!}
    @endsection