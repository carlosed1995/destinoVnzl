
<table class="table table-hover">
	<tbody>
	<th></th>

		<th>Eliminar Imagenes</th>
	</tbody>
	<tbody>
	@foreach($imagen as $imag)
	
		<td> <img title=" " width='50' height='50' src="/../public/imagenes/{{$imag->n}}"></td>
			<td>
				 <a href="{{route('elimnar.destroy', $imag->id)}}" onclick="return confirm('¿Esta seguro de eliminar esta imagen?')" class="btn btn-danger">Eliminar</a>	</td>	
		</tr>
		@endforeach
	</tbody>
</table>
<div class="action">
<button id='submitCreate' type="button" value="Reservar" class="btn btn-warning mostrarModal" class="button" id='{{$certificados->id}}' data-title="Edit" data-id="{{$certificados->id}}"  data-toggle="modal" type="button">Agregar imagen</button>
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
											<input type="hidden" id="id" value="" name="idReservaHtl">
											<div class="form-group">												

												<label class="control-label">Seleccione imagenes</label>
											<input id="img" name="img[]" width="50" height="50" type="file" multiple class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]'>
												</div>
                    {!!Form::submit('Subir Imagenes',['class'=>'btn btn-primary', 'id'=>'btn'])!!}
    								{!!Form::close()!!}
                    </div>
										</div>
					</div>
</div>