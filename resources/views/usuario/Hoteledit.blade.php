
@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
		{!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT'])!!}
			@include('usuario.forms.usr')
<table class="table">
<thead>
<th>
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
 </th>
<th>
	{!!Form::open(['route'=>['usuario.destroy', $user->id], 'method'=>'DELETE'])!!}
	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
</th>
	@endsection

