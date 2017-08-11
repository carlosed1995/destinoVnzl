	<!---MODAL RESERVA AUTH--->
@if (Auth::guest())
								<div class="modal fade" id="myModal" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">AVISO</h4>
													</div>
													<div class="modal-body">
														<p>Para disfrutar de todos nuestros servicios, como la reserva de hoteles debes estar registrado y haber iniciado sesion.
															</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
													</div>
												</div>

											</div>
										</div>
								@else

				<div class="modal fade" id="myModal" role="dialog">
											<div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title" id="myModalLabel">Reservar</h4>
                    </div>
                    <div class="modal-body">
                        {!!Form::open(['route' => 'activarrr.store', 'method' => 'post', 'id' => 'ActualizaEntidad' ])!!}                            
                      <input type="hidden" id="id_hotel" value="" name="id_hotel"> 
											<input type="hidden" id="idReservaHtl" value="" name="idReservaHtl"> 
											<h4 class="price">Datos Personales:</h4>
												<div class="form-group">
																 <label>Nombres</label>
																<input type="text" name="nombre" disabled placeholder="{{ Auth::user()->name }}" id="" class="form-control">
												</div>
												 <div class="form-group">
																<label>Apellidos</label>
																<input type="text" name="apellidos" disabled placeholder="{{ Auth::user()->apellido }}"  id="" class="form-control">
												</div>
													<div class="form-group">
																<label>Cedula</label> 
																<input type="text" name="documento" disabled placeholder="{{ Auth::user()->cedula }}" id="" class="form-control">
													</div> 
												<div class="form-group">
															 <label>Telefono</label>
																<input type="text" name="telefono"  disabled placeholder="{{ Auth::user()->telefono_movil}}"  id="" class="form-control">
												</div>
												<div class="form-group">
															 <label>Otro Telefono (Opcional)</label>
																<input type="text" name="telefono2" placeholder="Ingrese un numero de telefono" id="" class="form-control">
												</div>
											
												<div class="form-group">
															 <label>Correo</label>
																<input type="text" name="correo" placeholder="{{ Auth::user()->email }}" id="" class="form-control">
												</div>
											<h4 class="price">Datos del Establecimiento:</h4>
														<div class="form-group">
															 <label>Nombre </label>
																<input type="text" name="nombre_div"  id="nombreModal" class="form-control" disabled>
												</div>
													<div class="form-group">
															 <label>Direccion</label>
																<input type="text" name="direccion" placeholder="Ingrese una dirección" id="direccionModal" class="form-control" disabled>
												</div>
												
													  <div class="form-group">
																<label>Rango de fechas (Desde):</label>
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="fa fa-calendar"></i>
																	</div>
																	<input type="text" name="fechaini" class="form-control pull-right" id="reservation">
																</div> 
																
																	  <div class="form-group">
																<label>Rango de fechas (Hasta):</label>
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="fa fa-calendar"></i>
																	</div>
																	<input type="text" name="fechafin" class="form-control pull-right" id="reservation">
																</div> 
              					</div> 
											  <div class="form-group has-feedback">
                                <label>Cantidad de Personas</label>
                                <select id="cant_personas" type="set" class="form-control" name="cant_personas">
                                    <option>1</option>
                                    <option>2</option>
																		<option>3</option>
                                    <option>4</option>
																		<option>5</option>
                                </select>
                        </div>
										   
											
											<div class="form-group">
											{!!Form::label('comentarios','Comentarios:')!!}
											{!!Form::textarea('comentarios',null,['class'=>'form-control textarea-content','placeholder'=>'Ingrese algun comentario que desee enviar(Opcional)'])!!}
											</div>
                    {!!Form::submit('Reservar',['class'=>'btn btn-primary'])!!}
											
														<button type="button"  class="btn btn-default pull-right" data-dismiss="modal">Cerrar</button>

    								{!!Form::close()!!}
											
                    </div>
										</div>
							@endif
			<!--'method' => 'put', 'id' => 'ActualizaHtl'-->
					</div>
</div>


<div style="display:none">
	 {!!Form::open(['route' => 'diversionReserv.store', 'method' => 'post', 'id' => 'creaEntidad'])!!} 
	{!!Form::close()!!}
</div>
</div>