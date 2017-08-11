@extends('layouts.admin')
@section('content')

{!!Form::open(['route' => 'restaurantAdmin.index', 'method' => 'get', 'class' => 'navbar-form pull-right'])!!}
<div class="input-group">
 
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar Restaurante', 'aria-describedby' => 'Buscar' ])!!}
  <span class="input-group-addon" id="Buscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
</div>
{!!Form::close() !!}
<script>

	$("#id_estado").change(event => {
	$.get(`zonas/${event.target.value}`, function(res, sta){
		console.log(res);
	});
});

</script>
<br>
<br>
<br>
<br>
 <div class="box box-primary">
<div class="box-body">
 <div class="table-responsive">
      <table class="table table-hover" id="example1">
		<thead>
			<th>Nombre Región</th>
			<th>Imagén</th>
      <th>Activar/Desactivar</th>
		</thead>
		@foreach($regiones as $regi)
				
			<tbody>
				<td>{{$regi->nombre}}</td>
				<td>	<img  src="/../public/imagenes/{{$regi->img}}" width="50" height="50" alt="">
							</td>
			
				
		<div class="box-tools pull-right">
		  @if($regi['act'])   
	  <div class="btn-group">
     <td>
			 <a href="{{route('hola.show', $regi->id)}}" class="btn btn-xs btn-success">ON</a>
       <a href="{{route('hola.edit', $regi->id)}}" onclick="return confirm('¿Seguro que deseas desactivar el Restaurante?')" class="btn btn-xs btn-default">OFF</a></td>
    </div>
	@else
    <div class="btn-group">
    <td>
	    <a href="{{route('hola.show', $regi->id)}}" onclick="return confirm('¿Seguro que sedeas activar el Rastaurante?')" class="btn btn-xs btn-default">ON</a>
      <a href="{{route('hola.edit', $regi->id)}}" class="btn btn-xs btn-danger">OFF</a></td>
    </div>
 @endif
	</div>
  </td>
  <td>
<div class="action">
<button id='submitCreate' type="button" value="Reservar" class="btn btn-warning mostrarModal" class="button" id='{{$regi->id}}' data-title="Edit" data-id="{{$regi->id}}"  data-toggle="modal" type="button">Agregar imagen</button>
 </div>
	</td>
	<td>
	{!!link_to_route('restaurantAdmin.edit', $title = 'Editar', $parameters = [$regi->id], $attributes = ['class'=>'btn btn-primary'])!!}
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
                         {!!Form::open(['route' => 'subirimagenes.store', 'method' => 'post', 'files' => true])!!}
  													@include('alerts.success')                            
                      <input type="hidden" id="id_hotel" value="" name="id_hotel">
											<div class="form-group">												

												<label class="control-label">Seleccione imagenes</label>
											<input id="img" name="img[]" width="50" height="50" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">

												</div>
                    {!!Form::submit('Subir Imagenes',['class'=>'btn btn-primary', 'id'=>'btn'])!!}
    								{!!Form::close()!!}
                    </div>
										</div>
					</div>
</div>







{{$regiones->render()}}
@endsection