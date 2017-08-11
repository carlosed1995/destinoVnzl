@extends('layouts.admin')
@section('content')


 <div class="box box-primary">
<div class="box-body">
 <div class="table-responsive">
      <table class="table table-hover" id="example1">
		<thead>
			<th>Nombre del Plan</th>
			<th>Correo</th>
			<th>Teléfono</th>
		</thead>
		@foreach($planes as $plan)
				
			<tbody>
				<td>{{$plan->nombre}}</td>
				<td>{{$plan->correo}}</td>
				<td>{{$plan->telefono}}</td>
					<td>
		<div class="box-tools pull-right">
		  @if($plan['act'])   
	  <div class="btn-group">
     <td>
			 <a href="{{route('actplan.show', $plan->id)}}" class="btn btn-xs btn-success">ON</a>
       <a href="{{route('actplan.edit', $plan->id)}}" onclick="return confirm('¿Seguro que deseas desactivar este Plan?')" class="btn btn-xs btn-default">OFF</a></td>
    </div>
	@else
    <div class="btn-group">
    <td>
	    <a href="{{route('actplan.show', $plan->id)}}" onclick="return confirm('¿Seguro que deseas activar este Plan?')" class="btn btn-xs btn-default">ON</a>
      <a href="{{route('actplan.edit', $plan->id)}}" class="btn btn-xs btn-danger">OFF</a></td>
    </div>
 @endif
	</div>
  </td>
  <td>
<div class="action">
<button id='submitCreate' type="button" value="Reservar" class="btn btn-warning mostrarModal" class="button" id='{{$plan->id}}' data-title="Edit" data-id="{{$plan->id}}"  data-toggle="modal" type="button">Agregar imagen</button>
 </div>
	</td>
	<td>
	{!!link_to_route('PlanesUnicos.edit', $title = 'Editar', $parameters = [$plan->id], $attributes = ['class'=>'btn btn-primary'])!!}
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
                         {!!Form::open(['route' => 'SubirImg.store', 'method' => 'post', 'files' => true])!!}
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


{!!$planes->render()!!}
	@endsection






