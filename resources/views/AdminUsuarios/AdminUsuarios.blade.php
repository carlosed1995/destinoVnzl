@extends('layouts.admin')
@section('content')

<!--Buscador restaurantes -->
{!!Form::open(['route' => 'restaurantAdmin.index', 'method' => 'get', 'class' => 'navbar-form pull-right'])!!}
<div class="input-group">
 
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar usuario', 'aria-describedby' => 'Buscar' ])!!}
  <span class="input-group-addon" id="Buscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
</div>
{!!Form::close() !!}
<br>
<br>
<br>
<br>
 <div class="box box-primary">
<div class="box-body">
 <div class="table-responsive">
      <table class="table table-hover" id="example1">
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Usuario</th>
			<th>Rol</th>
		</thead>
		@foreach($usuarios as $usuario)
			<tbody>
				<td>{{$usuario->name}}</td>
				<td>{{$usuario->apellido}}</td>
				<td>{{$usuario->email}}</td>
				<td>{{$usuario->roles}}</td>
				<td>
					{!!link_to_route('usuarios.edit', $title = 'Editar', $parameters = [$usuario->id], $attributes = ['class'=>'btn btn-primary'])!!}
				</td>

			</tbody>
	@endforeach
		
	</table>

		 </div>
</div>
</div>

{!!$user->render()!!}
	@endsection