@extends('layouts.admin')
@section('content')




 <div class="box box-primary">
<div class="box-body">
	

 <div class="table-responsive">
	 <br>
<br>
{!!Form::open(['route' => 'parques.index', 'method' => 'get', 'class' => 'navbar-form pull-right'])!!}
<div class="input-group"> 
  {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar diversion', 'aria-describedby' => 'Buscar' ])!!}
  <span class="input-group-addon" id="Buscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
</div>
{!!Form::close() !!}
												<br>
												<br>
      <table class="table table-hover" id="example1">
		<thead>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>Teléfono</th>
		</thead>
		@foreach($parques as $parque)
				
			<tbody>
				<td>{{$parque->nombre}}</td>
				<td>{{$parque->direccion}}</td>
				<td>{{$parque->telefono}}</td>
					<td>
		<div class="box-tools pull-right">
		  @if($parque['act'])   
	  <div class="btn-group">
     <td>
			 <a href="{{route('onoff.show', $parque->id)}}" class="btn btn-xs btn-success">ON</a>
       <a href="{{route('onoff.edit', $parque->id)}}" onclick="return confirm('¿Seguro que deseas desactivar {{$parque->nombre}}?')" class="btn btn-xs btn-default">OFF</a></td>
    </div>
	@else
    <div class="btn-group">
    <td>
	    <a href="{{route('onoff.show', $parque->id)}}" onclick="return confirm('¿Seguro que sedeas activar {{$parque->nombre}}?')" class="btn btn-xs btn-default">ON</a>
      <a href="{{route('onoff.edit', $parque->id)}}" class="btn btn-xs btn-danger">OFF</a></td>
    </div>
 @endif
	</div>
  </td>
  <td>
<div class="action">
<button id='submitCreate' type="button" value="Reservar" class="btn btn-warning mostrarModal" class="button" id='{{$parque->id}}' data-title="Edit" data-id="{{$parque->id}}"  data-toggle="modal" type="button">Agregar imagen</button>
 </div>
	</td>
	<td>
	{!!link_to_route('parques.edit', $title = 'Editar', $parameters = [$parque->id], $attributes = ['class'=>'btn btn-primary'])!!}
	</td>

	</tbody>
	@endforeach

	</table>

		 </div>
</div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cargar Archivos</h4>
                    </div>
                    <div class="modal-body">
                   {!!Form::open(['route' => 'imagenediv.store', 'method' => 'post', 'files' => true])!!}
  													@include('alerts.success')                            
                      <input type="hidden" id="id_hotel" value="" name="id_hotel">
											<div class="form-group">												

												<label class="control-label">Seleccione imagenes</label>
											<input id="img" name="img[]" width="50" height="50" type="file" multiple class="file" data-allowed-file-extensions='["jpg", "png", "jpeg"]' required>

												</div>
                    {!!Form::submit('Subir Imagenes',['class'=>'btn btn-primary', 'id'=>'btn'])!!}
    								{!!Form::close()!!}
                    </div>
										</div>
					</div>
</div>

{!!$parques->render()!!}
	@endsection