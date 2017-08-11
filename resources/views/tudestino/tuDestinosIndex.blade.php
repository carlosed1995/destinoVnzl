@extends('layouts.admin')
@section('content')


 <div class="box box-primary">
<div class="box-body">
 <div class="table-responsive">
      <table class="table table-hover" id="example1">
		<thead>
			<th>Nombre Destino</th>
			<th>Correo</th>
			<th>Teléfono</th>
		</thead>
		@foreach($destinos as $destino)
				
			<tbody>
				<td>{{$destino->nombre}}</td>
				<td>{{$destino->correo}}</td>
				<td>{{$destino->telefono}}</td>
					<td>
		<div class="box-tools pull-right">
		  @if($destino['act'])   
	  <div class="btn-group">
     <td>
			 <a href="{{route('actdestin.show', $destino->id)}}" class="btn btn-xs btn-success">ON</a>
       <a href="{{route('actdestin.edit', $destino->id)}}" onclick="return confirm('¿Seguro que deseas desactivar destino?')" class="btn btn-xs btn-default">OFF</a></td>
    </div>
	@else
    <div class="btn-group">
    <td>
	    <a href="{{route('actdestin.show', $destino->id)}}" onclick="return confirm('¿Seguro que deseas activar destino?')" class="btn btn-xs btn-default">ON</a>
      <a href="{{route('actdestin.edit', $destino->id)}}" class="btn btn-xs btn-danger">OFF</a></td>
    </div>
 @endif
	</div>
  </td>
  <td>
<div class="action">
<button id='submitCreate' type="button" value="Reservar" class="btn btn-warning mostrarModal" class="button" id='{{$destino->id}}' data-title="Edit" data-id="{{$destino->id}}"  data-toggle="modal" type="button">Agregar imagen</button>
 </div>
	</td>
	<td>
	{!!link_to_route('tudestinos.edit', $title = 'Editar', $parameters = [$destino->id], $attributes = ['class'=>'btn btn-primary'])!!}
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
                         {!!Form::open(['route' => 'subirdestinoimg.store', 'method' => 'post', 'files' => true])!!}
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


{!!$destinos->render()!!}
	@endsection






