@extends('layouts.admin')
@section('content')

 <!--<table>
    <tbody>
 <td>
     <input type="text" class="form-control">
 </td>
 <td>
     <button type="submit" class="btn btn-success">Buscar</button>
 </td>
  </tbody>
</table>-->


	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Descripción</th>
			<th>Condiciones</th>
		</thead>
		@foreach($escapes as $escape)
			<tbody>
				<td>{{$escape->nombre}}</td>
				<td>{{$escape->direccion}}</td>
				<td>{{$escape->fecha_ini}}</td>
				<td>{{$escape->fecha_fin}}</td>
				<td>{{$escape->descripcion}}</td>
				<td>{{$escape->condiciones}}</td>
<td>
					{!!link_to_route('escapesadmin.edit', $title = 'Editar', $parameters = [$escape->id], $attributes = ['class'=>'btn btn-primary'])!!}
				</td>

			</tbody>
		@endforeach
	</table>


	@endsection

