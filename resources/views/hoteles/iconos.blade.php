	<!--<table class="table table-hover">
	<tbody>
	<th>Servicios del Hotel</th>
	<!--	<th>Logotipo</th>
		<th>Eliminar Servicios</th>
	</tbody>
	<tbody>
	<?php $vector = ''; ?>
	@foreach($tiposerv as $tserv)
	<tr><td> {{$tserv->serv}}</td>
		<td> <img title=" " width='50' height='50' src="/../public/imagenes/{{$tserv->imag}}"></td>
			<td>
				 <a href="{{route('elimnar.destroy', $tserv->id)}}" onclick="return confirm('¿Esta seguro de eliminar este servicio?')" class="btn btn-danger">Eliminar</a>	</td>	
		</tr>
	<?php
		$vector[$tserv->tipo]=1;
		?>
		@endforeach
	</tbody>
</table>-->

<br>
<br>

<label>Añadir Servicios</label>
<div class="form-group">
<select data-placeholder="Seleccione" id="id-servicio" name="id-servicio[]" multiple class="form-control">
			@foreach($servicio as $servic)
	<?php	
		$temp = array_get($vector, $servic->id, false);
		?>
			@if($temp)
        
    <option value="{{$servic->id}}" selected style="background-image:url(/../public/imagenes/);">{{$servic->nombre}}</option>
			    
          @else 
    <option value="{{$servic->id}}" style="background-image:url(/../public/imagenes/{{$tserv->imag}});">{{$servic->nombre}}</option>
					@endif
			@endforeach
</select>
</div>


<script>
	$("#id-servicio").chosen({

	});

</script>


	