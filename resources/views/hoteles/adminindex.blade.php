@extends('layouts.admin')
@section('content')

                      <div class="table-responsive">
<br>
<br>
{!!Form::open(['route' => 'detallehotel.index', 'method' => 'get', 'class' => 'navbar-form pull-right'])!!}
<div class="input-group">
 
  {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar Hotel', 'aria-describedby' => 'Buscar' ])!!}
  <span class="input-group-addon" id="Buscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
</div>
{!!Form::close() !!}
												<br>
												<br>
<!--Buscador hoteles -->
<!--Buscador hoteles -->
                          <table class="table table-hover" id="example1">
															<thead>
																<th>Nombre</th>
																<th>Telefono</th>
																	<th></th>
																	<th>Activar o Desactivar</th>
															</thead>
													@foreach($pruebahotel as $pruebahoteles)
																<tbody>
																	<td>{{$pruebahoteles->nombre}}</td>
																	<td>{{$pruebahoteles->telefono}}</td>
																	<td>
																		<div class="box-tools pull-right">
		                                           @if($pruebahoteles['act'])   
																					<div class="btn-group">
																						
																		<td><a href="{{route('activarrr.show', $pruebahoteles->id)}}" class="btn btn-xs btn-success">ON</a>
																			 <a href="{{route('activarrr.edit', $pruebahoteles->id)}}" onclick="return confirm('¿Esta seguro de desactivar el Hotel?')" class="btn btn-xs btn-default">OFF</a></td>
												    
																		</div>
																			@else
																			
																						<div class="btn-group">
																						
																		<td><a href="{{route('activarrr.show', $pruebahoteles->id)}}" onclick="return confirm('¿Está seguro de activar el hotel?')" class="btn btn-xs btn-default">ON</a>
																			 <a href="{{route('activarrr.edit', $pruebahoteles->id)}}"  class="btn btn-xs btn-danger">OFF</a></td>
												    
																		</div>
																			
											               @endif
																						</div>
																	</td>
																	<td>
																		<div class="action">
																														<button id='submitCreate' type="button" value="Reservar" class="btn btn-warning mostrarModal" class="button" id='{{$pruebahoteles->id}}' data-title="Edit" data-id="{{$pruebahoteles->id}}"  data-toggle="modal" type="button">Agregar imagen</button>
																														 </div>
																	</td>
																	<td>
																		{!!link_to_route('detallehotel.edit', $title = 'Editar', $parameters = [$pruebahoteles->id], $attributes = ['class'=>'btn btn-primary'])!!}
																	</td>
															
														</tbody>
													@endforeach
												</table>
										</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cargar Archivos</h4>
                    </div>
                    <div class="modal-body">
                         {!!Form::open(['route' => 'subirimagenesHotl.store', 'method' => 'post', 'files' => true])!!}
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


{!!$pruebahotel->render()!!}
	@endsection
















