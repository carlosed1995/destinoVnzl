<script src="../../public/js/solonumeros.js"></script>
<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombre',$pruebahoteles->nombre,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>

<div class="form-group">
		{!!Form::label('direccion','Dirección:')!!}
		{!!Form::text('direccion',$pruebahoteles->direccion,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>
 <div class="form-group">
      {!!Form::label('Telefono', 'Telefono:')!!}
     {!!Form::text('telefono', $pruebahoteles->telefono,['class' =>'form-control', 'id'=>'telefono'])!!}
       
  </div> 

 <div class="form-group">
      {!!Form::label('Telefono', 'Telefono (Opcional):')!!}
     {!!Form::text('telefono2', $pruebahoteles->telefono2,['class' =>'form-control', 'id'=>'telefonoopcional'])!!}   
  </div> 

<div class="form-group">
	{!!Form::label('descripcion','Observaciones, Otros beneficios:')!!} {!!Form::textarea('descripcion', $pruebahoteles->descripcion ,['class'=>'form-control ckeditor','placeholder'=>'Ingresa la descripción del hotel'])!!}
</div>
  

<div class="form-group">
  
  {!!Form::label('Pagina Web','Pagina Web')!!}
  {!!Form::text('url', $pruebahoteles->url, ['class' => 'form-control'])!!}
    
</div>

<div class="form-group">
  {!!Form::label('Correo','Correo:')!!}
{!!Form::text('correo', $pruebahoteles->correo, ['class' => 'form-control'])!!}
    
</div>
<!--<div class="form-group">
  {!!Form::label('terminosCond','Terminos y Condiciones')!!}
{!!Form::text('terminosCond', $pruebahoteles->terminosCond, ['class' => 'form-control'])!!}     
</div>-->
<div class="form-group">
  {!!Form::label('horario','Horario:')!!}
{!!Form::text('horario', $pruebahoteles->horario, ['class' => 'form-control'])!!}    
</div>
<div class="form-group">
  {!!Form::label('descuento','Descuento:')!!}
{!!Form::text('descuento', $pruebahoteles->descuento, ['class' => 'form-control'])!!}
       
</div>

<div class="form-group has-feedback">
    <label>Estrellas del Hotel</label>
        <select  type="set" class="form-control" name="estrellas">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
</div>







<div class="form-group">
  {!!Form::label('rif','Rif del Hotel:')!!}
{!!Form::text('rif', $pruebahoteles->rif, ['class' => 'form-control'])!!}       
</div>




<br>

<div align="center">
<h2>Redes Sociales</h2>
</div>
<div class="form-group">

		
<label for="" class="col-md-4 control-label">Facebook</label>
	<input id="" type="text" value="{{$pruebahoteles->facebook}}" class="form-control" placeholder="Facebook " name="facebook" >
	<span class="help-block"></span>

	</div>
	
	
	<div class="form-group">

		
<label for="" class="col-md-4 control-label">Instagram</label>
	<input id="" type="text" value="{{$pruebahoteles->instagram}}" class="form-control" placeholder="Instagram" name="instagram" >
	<span class="help-block"></span>

	</div>
	
	
		
	<div class="form-group">

		
<label for="" class="col-md-4 control-label">Twitter</label>
	<input id="" type="text" value="{{$pruebahoteles->twitter}}" class="form-control" placeholder="Twitter" name="twitter" >
	<span class="help-block"></span>

	</div>
	
	
			<div class="form-group">

		
<label for="" class="col-md-4 control-label">Google+</label>
	<input id="" type="text" value="{{$pruebahoteles->google}}" class="form-control" placeholder="google" name="google" >
	<span class="help-block"></span>

	</div>
	
	
		<div class="form-group">

		
<label for="" class="col-md-4 control-label">Youtube</label>
	<input id="" type="text" value="{{$pruebahoteles->youtube}}" class="form-control" placeholder="youtube" name="youtube" >
	<span class="help-block"></span>

	</div>
		

	<br><br>


	
			<label>Categoria Hotel</label>
	<div class="form-group">
		<select name="categoria" id="categoria" class="form-control" required>
			<option value="">Seleccione</option>
			@foreach($categoria as $category)
			<option value="{{$category->idCategoria}}" "@if($category->idCategoria == $pruebahoteles->categoria_hotel) selected='selected'@endif">{{$category->tipo}}</option>
			@endforeach
		</select>	

</div>









			
			<label>Pais</label>
	<div class="form-group">
		<select name="txtpais" id="txtpais" class="form-control" required>
			<option value="">Seleccione</option>
			@foreach($pais as $ps)
			<option value="{{$ps->id}}" "@if($ps->id == $pruebahoteles->idpais) selected='selected'@endif">{{$ps->Nombre}}</option>
			@endforeach
		</select>	

</div>


 <label>Estado</label>	
	<div class="form-group">
		<select name="idestado" id="id-estado" class="form-control" required>
			
			@foreach($estado as $estad)
			@if($estad->id == $pruebahoteles->id_estado)
			<option value="{{$estad->id}}" selected='selected'>{{$estad->Nombre}}</option>
		  @endif
			@endforeach
		</select>	
</div>

	<label>Ciudad</label>
	<div class="form-group">
		<select name="txtciudad" id="select-project" class="form-control" required>
			
			@foreach($ciudad as $ciud)
			<option value="{{$ciud->id}}" "@if($ciud->id == $pruebahoteles->id_ciudad) selected='selected'@endif">{{$ciud->Nombre}}</option>
			@endforeach
		</select>		
	</div>
 <label>Zona</label>
	<div class="form-group">
		<select name="txtzona" id="select-level" class="form-control" required>
		
			<option value="">Seleccione</option>
				@foreach($zona as $zon)
			<option value="{{$zon->id}}" "@if($zon->id == $pruebahoteles->id_zona) selected='selected'@endif">{{$zon->Nombre}}</option>
			@endforeach
		</select>	
</div>
<script>
</script>


	<table class="table table-hover">
	<!--<tbody>
	<th>Servicios del Hotel</th>-->
	<!--	<th>Logotipo</th>
		<th>Eliminar Servicios</th>
	</tbody>
	<tbody>-->
	<?php $vector = ''; ?>
	@foreach($tiposerv as $tser)
		<!--<<td> <img title=" " width='50' height='50' src="/../public/imagenes/{{$tser->imag}}"></td>
			<td>
				 <a href="{{route('elimnar.destroy', $tser->id)}}" onclick="return confirm('¿Esta seguro de eliminar este servicio?')" class="btn btn-danger">Eliminar</a>	</td>	
		</tr>-->
	<?php
		$vector[$tser->tipo]=1;
		?>
		@endforeach
	</tbody>
</table>

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
    <option value="{{$servic->id}}");>{{$servic->nombre}}</option>
					@endif
			@endforeach
</select>
</div>

<div class="form-group">
	<label>Imagen Principal</label>
	<input id="img" name="img" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]'>
</div>

<script>
  
   $("#img").fileinput({
           initialPreviewAsData: true,
            initialPreview: [
                "/../public/imagenes/{{$pruebahoteles->img}}",               
            ],
     
       initialPreviewConfig: [
                {caption: "{{$pruebahoteles->img}}", size: 329892, width: "120px",  key: 1}
            ],     
        });
</script>


<script>
	$("#id-servicio").chosen({

	});

</script>



<!--Pais estado-->
<script>
$(function(){
	
	$('#txtpais').click('change', onSelectPais);
//	$('select-level');
	
});
	
	function onSelectPais(){
	var idk =	$(this).val();

		//ajazzz
		
		
		$.get('/proyecto2/'+idk+'/nombre', function(data){
			var htmlSlek = '';
			for(var i=0; i<data.length; i++){
			htmlSlek += '<option value="'+data[i].id+'">'+data[i].Nombre+'</option>';
				$('#id-estado').html(htmlSlek);
				
			}
			
		});
		
		
	}


</script>

<!--Estado y ciudades-->
<script>
$(function(){
	
	$('#select-project').click('change', onSelectEstados);
//	$('select-level');
	
});
	
	function onSelectEstados(){
	var ides =	$(this).val();

		//ajazzz
		
		
		$.get('/proyecto/'+ides+'/nombre', function(data){
			var htmlSlec = '';
			for(var i=0; i<data.length; i++){
			htmlSlec += '<option value="'+data[i].id+'">'+data[i].Nombre+'</option>';
				$('#select-level').html(htmlSlec);
				
			}
			
		});
		
		
	}
	
	

</script>
<!-- ciudades y  zpnas-->

<script>
$(function(){
	
	$('#id-estado').click('change', onSelectEstadosk);
//	$('select-level');
	
});
	
	function onSelectEstadosk(){
	var idk =	$(this).val();

		//ajazzz
		
		
		$.get('/proyecto1/'+idk+'/nombre', function(data){
			var htmlSleck = '';
			for(var i=0; i<data.length; i++){
			htmlSleck += '<option value="'+data[i].id+'">'+data[i].Nombre+'</option>';
				$('#select-project').html(htmlSleck);		
			}	
		});
		
	}
	
</script>
