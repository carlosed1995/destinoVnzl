@extends('layouts.admin')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif


@section('content')

	@section('content')

 {!!Form::open(['route' => 'usuario.index', 'method' => 'GET' ,'class' => 'form-group', 'role' => ' search'])!!}
 <table>
    <tbody>
 <td>
     <input type="text" class="form-control">
 </td>
 <td>
     <button type="submit" class="btn btn-success">Buscar</button>
 </td>
  </tbody>
</table>
{!!form::close()!!}

	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Correo</th>
			<th>Telefono</th>
		</thead>
		@foreach($users as $user)
			<tbody>
				<td>{{$user->name}}</td>
				<td>{{$user->apellido}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->telefono}}</td>
				<td>
	{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>

		@endforeach
	</table>

	{!!$users->render()!!}

	@endsection









