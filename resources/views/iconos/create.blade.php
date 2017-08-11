@extends('layouts.admin')
@section('content')
 {!!Form::open(['route' => 'iconos.store', 'method' => 'post', 'files' => true])!!}
<h1>
   <div class="form-group">
              {!! Form::label('titulo', 'Titulo del Servicio') !!}
              {!!Form::text('txttitulo', null, ['class'=> 'form-control', 'placeholder' => 'Titulo del Servicio', 'required' ])!!}
      </div>
</h1>


			<label class="control-label">Seleccione icono</label>
											<input id="img" name="img" width="50" height="50" type="file" class="file" data-show-upload="false" data-show-caption="true">

							<br>
              <br>
                   
        {!!Form::submit('Crear icono',['class'=>'btn btn-primary'])!!}     
	{!!Form::close()!!}

@endsection