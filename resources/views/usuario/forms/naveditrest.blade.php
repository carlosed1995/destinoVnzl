<div class="form-group">
		{!!Form::label('nombre','Nombre del Establecimiento:')!!}
		{!!Form::text('txtnombre',$rest->nombre,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario', 'required'])!!}
</div>

<div class="form-group">
		{!!Form::label('direccion','Dirección:')!!}
		{!!Form::text('txtdireccion',$rest->direccion,['class'=>'form-control','placeholder'=>'Ingresa la direccion del usuario', 'required'])!!}
</div>

<div class="form-group">
		{!!Form::label('telefono','Telefono:')!!}
		{!!Form::text('txttelefono',$rest->telefono,['class'=>'form-control','placeholder'=>'Ingresa el numero de telefono'])!!}
</div>

<div class="form-group">	
			{!!Form::label('correo','Correo del establecimiento:')!!}
		{!!Form::email('txtcorreo',$rest->correo_elect,['class'=>'form-control','placeholder'=>'Ingrese el correo electrónico'])!!}
</div> 

 <!--<div class="form-group">
      {!!Form::label('url', 'Página Web:')!!}
     {!!Form::text('txturl', $rest->url,['class' =>'form-control'])!!}       
  </div> -->

<div class="form-group">   
 {!!Form::label('horario','Horario de atención')!!}
{!!Form::text('txthorario', $rest->horario, ['class' => 'form-control'])!!}  
</div>

	
  

<!--<div class="form-group">
{!!Form::label('sugerencia','Sugerencias del chef')!!}
{!!Form::text('txtsugerencia', $rest->sugerencias, ['class' => 'form-control'])!!}      
</div>-->
<div class="form-group">
  {!!Form::label('descuento','Descuentos')!!}
	{!!Form::text('txtdescuento', $rest->descuentos, ['class' => 'form-control'])!!}    
</div>

	

 <label>Perfil de TarjetaHabiente</label>
	<div class="form-group">
		<select name="txtperfilth" id="" class="form-control" >		
			@foreach($resk as $res)
			<option value= "{{$res->id}}" "@if($res->id==$rest->perfilTH) selected='selected' @endif" required>{{$res->perfil}}</option>
			@endforeach
		</select>
	</div>

<label>Tipo de Aliado</label>
	<div class="form-group">		
		<select name="txttipoA" id="" class="form-control" >	
			@foreach($tipoA as $tipA)
			<option value= "{{$tipA->id}}" "@if($tipA->id==$rest->tipo_Aliad) selected='selected' @endif" required>{{$tipA->tipoaliado}}</option>
			@endforeach
		</select>
	</div>

<label>Tipo de consumidor</label>
	<div class="form-group">	
		<select name="txttipoC" id="" class="form-control" >	
			@foreach($tipoC as $tipC)
			<option value= "{{$tipC->id}}" "@if($tipC->id==$rest->tipo_Con) selected='selected' @endif" required>{{$tipC->tipo}}</option>
			@endforeach
		</select>		
	</div>

<div class="form-group">   
	 {!!Form::label('Promociones','Promociones:')!!}
	{!!Form::text('txtpromociones', $rest->promociones, ['class' => 'form-control'])!!}  
</div>



<br>

<div align="center">
<h2>Redes Sociales</h2>
</div>
<div class="form-group">

		
<label for="" class="col-md-4 control-label">Facebook</label>
	<input id="" type="text" class="form-control" value="{{$rest->facebook}}" placeholder="Facebook " name="facebook" >
	<span class="help-block"></span>

	</div>
	
	
	<div class="form-group">

		
<label for="" class="col-md-4 control-label">Instagram</label>
	<input id="" type="text" class="form-control" value="{{$rest->instagram}}" placeholder="Instagram" name="instagram" >
	<span class="help-block"></span>

	</div>
	
	
	
		
	<div class="form-group">

		
<label for="" class="col-md-4 control-label">Twitter</label>
	<input id="" type="text" class="form-control" value="{{$rest->twitter}}" placeholder="Twitter" name="twitter" >
	<span class="help-block"></span>

	</div>
		
		
			<div class="form-group">

		
<label for="" class="col-md-4 control-label">Google+</label>
	<input id="" type="text" class="form-control" value="{{$rest->google}}" placeholder="google" name="google" >
	<span class="help-block"></span>

	</div>
	
	
		<div class="form-group">

		
<label for="" class="col-md-4 control-label">Youtube</label>
	<input id="" type="text" class="form-control" value="{{$rest->youtube}}" placeholder="youtube" name="youtube" >
	<span class="help-block"></span>

	</div>

	<br><br>
	





 <label>Pais</label>
	<div class="form-group">
		<select name="txtpais" id="txtpais" class="form-control" required>
			
			@foreach($pais as $ps)
			<option value="{{$ps->id}}" "@if($ps->id == $rest->pais) selected='selected'@endif" >{{$ps->Nombre}}</option>
			                            
			@endforeach
		</select>
</div>

 <label>Estado</label>
	<div class="form-group">
		<select name="txtestado" id="id-estado" class="form-control" required>
		
			@foreach($estadosk as $estad)
			<option value="{{$estad->id}}" "@if($estad->id == $rest->id_estado1) selected='selected'@endif">{{$estad->Nombre}}</option>
			@endforeach
		</select>
</div>

	<label>Ciudad</label>
	<div class="form-group">
		<select name="txtciudad" id="select-project" class="form-control" required>
			<option value="">Seleccione</option>
			@foreach($ciudad as $ciud)
			<option value="{{$ciud->id}}" "@if($ciud->id == $rest->id_ciudad1) selected='selected'@endif">{{$ciud->Nombre}}</option>
			@endforeach
		</select>	
	</div>

 <label>Zona</label>
	<div class="form-group">
		<select name="txtzona" id="select-level" class="form-control" required>
			<option>Seleccione</option>
			<option value="">Seleccione</option>
				@foreach($zona as $zon)
			<option value="{{$zon->id}}" "@if($zon->id == $rest->zonas) selected='selected'@endif">{{$zon->Nombre}}</option>
			@endforeach
		</select>	
</div>
		

 <label>Tipo de gastronomia</label>
	<div class="form-group">
		<select name="txtespecialidad" id="select-level" class="form-control" required>
			<option>Seleccione</option>
				@foreach($especialidad as $esp)
			<option value="{{$esp->idEspecialidad}}" "@if($esp->idEspecialidad == $rest->id_especialidad1) selected='selected'@endif">{{$esp->nombre}}</option>
			@endforeach
		</select>	
</div>

<!--<div class="form-group">
  {!!Form::label('rif','Rif Restaurant')!!}
{!!Form::text('txtrif', $rest->rif, ['class' => 'form-control'])!!}       
</div>-->	
				
<!--<img src="/../public/imagenes/{{$rest->img}}">
					<label class="control-label">Seleccione imagenes</label>
	<input id="img" name="img" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
												</div>-->



<div class="form-group">
	<label>Imagen Principal</label>
	<input id="img" name="img" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]'>
</div>

<script>
  
   $("#img").fileinput({
           initialPreviewAsData: true,
            initialPreview: [
                "/../public/imagenes/{{$rest->img}}",
               
            ],
     
       initialPreviewConfig: [
                {caption: "{{$rest->img}}", size: 329892, width: "120px", key: 1}
            ],
     
        });

</script>






<div class="form-group">      
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
</div>



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


<!--Ciudad a zona-->
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
<!-- estado a ciudad-->

