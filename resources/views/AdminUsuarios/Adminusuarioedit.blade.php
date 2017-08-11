@extends('layouts.admin')
@section('content')
{!!Form::open(['route'=>['usuarios.update', $usuarios->id],'method'=>'PATCH'])!!}

<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('name',$usuarios->name,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>

<div class="form-group">
		{!!Form::label('apellido','Apellido:')!!}
		{!!Form::text('apellido',$usuarios->apellido,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>
 <div class="form-group">
      {!!Form::label('Telefono', 'Telefono:')!!}
     {!!Form::text('email', $usuarios->email,['class' =>'form-control'])!!}
       
  </div> 

<label>Rol Usuario</label>
	<div class="form-group">		
		<select name="rolUsuario" id="" class="form-control" >
			@foreach($rol as $role)
			<option value= "{{$role->id}}" "@if($role->id==$usuarios->rolUsuario) selected='selected' @endif" >{{$role->tipo}}</option>
			@endforeach
		</select>
	</div>

{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}


@endsection