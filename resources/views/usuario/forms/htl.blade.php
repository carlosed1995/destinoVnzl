
<div class="form-group">

 <label>Nombre de establecimiento</label>
			<input type="text" name="txtnombre" placeholder="Ingrese nombre del establecimiento" id="" class="form-control" required>
</div>
		<div class="form-group">

			<label>Direccion</label>
			<input type="text" name="txtdireccion" placeholder="Ingrese dirección del Restaurant" id="" class="form-control" required>
		</div>
		<div class="form-group">

			<label>Teléfono</label>
			<input type="text" name="txttelefono" placeholder="Ingrese un numero de teléfono" id="" class="form-control" required>
		</div>
 <!--<div class="form-group">

			<label>Página web</label> 
			<input type="text" name="txturl" placeholder="Ingrese la página web del Restaurant" id="" class="form-control" required>
</div>--> 

<div class="form-group">

			<label>Correo del establecimiento</label> 
			<input type="email" name="txtcorreo" placeholder="Ingrese el correo electrónico" id="" class="form-control">
</div>



<div class="form-group">

			<label>Horario</label>
			<input type="text" name="txthorario" placeholder="Ingrese Horario" id="" class="form-control" required>

</div>
<br>
    

      <br>
<!--<div class="form-group">
			<label>Sugerencias</label>
			<input type="text" name="txtsugerencia" placeholder="Ingrese sugerencia del chef" id="" class="form-control" >

</div>-->
			<div class="form-group">
				 <label>Descuentos</label>
			<input type="text" name="txtdescuento" placeholder="Ingrese descuentos  (Opcional)" id="" class="form-control" >

	</div>



			 <label>Perfil de TarjetaHabiente</label>
	<div class="form-group">
{!!Form::select('txtperfilth', $perfilth, null,['id'=>'perfilth', 'class'=>'form-control', 'placeholder'=>'Perfil de Tarjetahabiente', 'required'])!!}
	

</div>

		
				 <label>Tipo de Aliado</label>
	<div class="form-group">
{!!Form::select('tipoA', $tipoA, null,['id'=>'tipoA', 'class'=>'form-control', 'placeholder'=>'Tipo de aliado', 'required'])!!}
	</div>





				 <label>Tipo de consumidor</label>
	<div class="form-group">
{!!Form::select('tipoC', $tipoC, null,['id'=>'tipoC', 'class'=>'form-control', 'placeholder'=>'Tipo de consumidor','required'])!!}
	</div>


<br>
      
<br>


<div class="form-group">
<input type="text" name="titulo1" placeholder="Título del texto" id="" class="form-control" required>
 {!!Form::textarea('txttitulo1',null,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>

<br>
<br>
<div class="form-group">
<input type="text" name="titulo2" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo2',null,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>
    <div class="form-group">
<h3>
  Estatus del texto 
    </h3> 


                 <div class="checkbox">
         <label>
<input id="micheckbox" name="micheckbox" type="checkbox" value="1" name="chekk" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> 

                </label>
             </div>
          </div>
<br>
 
  

<button id="alternar" class="btn btn-default" type="button">Agregar Nuevo</button>
<br>
<br>

<script>
  $(document).ready(function(){ 
   $('#alternar').on('click',function(){
      $('#txt1').toggle('slow');
   });
});
</script>

<script>
  $(document).ready(function(){ 
   $('#alternar2').on('click',function(){
      $('#txt2').toggle('slow');
   });
});
</script>


<div id="txt1" style="display:none;">
    
  <div class="form-group">
<input type="text" name="titulo3" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo3',null,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>
  
  <br>
  <div class="form-group">
<h3>
  Estatus del texto
    </h3> 


     <div class="checkbox">
         <label>
<input id="micheckbox2" name="micheckbox2" type="checkbox" value="1" name="chekk" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> 


                </label>
             </div>
          </div>

  
  
  
  <br>
<br>

<button id="alternar2" class="btn btn-default" type="button">Agregar Nuevo</button>
<br>
<br>
  <div id="txt2" style="display:none;">
  <div class="form-group">
<input type="text" name="titulo4" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo4',null,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>
    <br>
    <br>
    <div class="form-group">
<h3>
  Estatus del texto 
    </h3> 


     <div class="checkbox">
         <label>
<input id="micheckbox3" name="micheckbox3" type="checkbox" value="1" name="chekk" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"> 


                </label>
                </div>
        
          </div>
  
  </div>
</div>


      <br>
		<div class="form-group">
				 <label>Promociones</label>
			<input type="text" name="txtpromociones" placeholder="Promociones" id="" class="form-control" >

	</div>
	
	
	
	
<br>

<div align="center">
<h2>Redes Sociales</h2>
</div>
<div class="form-group">

		
<label for="" class="col-md-4 control-label">Facebook</label>
	<input id="" type="text" class="form-control" placeholder="Facebook " name="facebook" >
	<span class="help-block"></span>

	</div>
	
	
	<div class="form-group">

		
<label for="" class="col-md-4 control-label">Instagram</label>
	<input id="" type="text" class="form-control" placeholder="Instagram" name="instagram" >
	<span class="help-block"></span>

	</div>
	
	
	
		
	<div class="form-group">

		
<label for="" class="col-md-4 control-label">Twitter</label>
	<input id="" type="text" class="form-control" placeholder="Twitter" name="twitter" >
	<span class="help-block"></span>

	</div>
		
		
			<div class="form-group">

		
<label for="" class="col-md-4 control-label">Google+</label>
	<input id="" type="text" class="form-control" placeholder="google" name="google" >
	<span class="help-block"></span>

	</div>
	
	
		<div class="form-group">

		
<label for="" class="col-md-4 control-label">Youtube</label>
	<input id="" type="text" class="form-control" placeholder="youtube" name="youtube" >
	<span class="help-block"></span>

	</div>

	<br><br>
	



		<!--	<div class="form-group">
				<label>Rif</label>
				<input type="text" name="txtrif" placeholder="Rif del establecimiento ejemplo: J-00124134-5" id="" class="form-control" required>

</div>-->
	<!--	<label>Ciudad</label>

		<div class="form-group">
		{!!Form::select('estado', $estado, null,['id'=>'id_estado', 'class'=>'form-control', 'placeholder'=>'Ingrese la Ciudad'])!!}
</div>

	  <label>Municipio</label>

	<div class="form-group">
{!! Form::select('ciudad',['placeholder'=>'Selecciona'],null,['id'=>'id_ciudad', 'class'=>'form-control']) !!}
	</div>-->
 <label>Pais</label>
	<div class="form-group">
		<select name="txtpais" id="txtpais" class="form-control" required>
			<option value="">Seleccione</option>
			@foreach($pais as $ps)
			<option value="{{$ps->id}}">{{$ps->Nombre}}</option>
			@endforeach
		</select>	

</div>


 <label>Estado</label>
	<div class="form-group">
		<select name="txtestado" id="id-estado" class="form-control" required>
			<option value="">Seleccione</option>
			<!--@foreach($estadosk as $estad)
			<option value="{{$estad->id}}">{{$estad->Nombre}}</option>
			@endforeach-->
		</select>	

</div>



	<label>Ciudad</label>
	<div class="form-group">
		<select name="txtciudad" id="select-project" class="form-control" required>
				<option>Seleccione</option>
			<option value="">Seleccione</option>
			<!--est es igual a zonas-->
				<!--estado es igual a Ciudades-->
			<!--	@foreach($estado as $esta)
			<option value="{{$esta->id}}">{{$esta->Nombre}}</option>
			@endforeach-->
		</select>	
		
	</div>


 <label>Zona</label>
	<div class="form-group">
		<select name="txtzona" id="select-level" class="form-control" required>
			<option>Seleccione</option>
			<option value="">Seleccione</option>
				<!--	@foreach($est as $es)
			<option value="{{$es->id}}">{{$es->Nombre}}</option>
			@endforeach-->
		</select>	
</div>
		
	
	


	<!--<div class="form-group">
				 <label>Zona</label>
			<input type="text" name="txtzona" placeholder="Ingrese la zona" id="" class="form-control" >

	</div>-->



 <label>Tipo de gastronomia</label>
<div class="form-group">
{{Form::select('especialidad', $especialidad,['idEspecialidad' => 'idEspecialidad'], array('placeholder' => 'Seleccione Gastronomía', 'class' => 'form-control', 'id'=>'especialidad', 'required'  ))}}
   
	</div>








		<div class="form-group">
													<label>Imagen Principal</label>
<input id="img" name="img" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' required>

	</div>

	
	
<script>
$('#id-estado').select2({	
});	
</script>
<br>
	 <div class="form-group">      
  {!!Form::submit('Registrar',['class'=>'btn btn-info', 'id'=>'btn'])!!}			
	<!--	<button type="button" class="btn btn-info">Información</button>-->
</div>
<!--Pais estado-->
<script>
$(function(){	
	$('#txtpais').on('change', onSelectPais);
//	$('select-level');	
});	
	function onSelectPais(){
	var idk =	$(this).val();
		//ajazzz		
		$.get('/proyecto2/'+idk+'/nombre', function(data){
			var htmlSlek = '<option value="">Seleccione</option>';
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
	$('#select-project').on('change', onSelectEstados);
//	$('select-level');	
});
	
	function onSelectEstados(){
	var ides =	$(this).val();
		//ajazzz
		$.get('/proyecto/'+ides+'/nombre', function(data){
			var htmlSlec = '<option value="">Seleccione</option>';
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
	$('#id-estado').on('change', onSelectEstadosk);
//	$('select-level');	
});
	
	function onSelectEstadosk(){
	var idk =	$(this).val();
		//ajazzz		
		$.get('/proyecto1/'+idk+'/nombre', function(data){
			var htmlSleck = '<option value="">Seleccione</option>';
			for(var i=0; i<data.length; i++){
			htmlSleck += '<option value="'+data[i].id+'">'+data[i].Nombre+'</option>';
				$('#select-project').html(htmlSleck);				
			}			
		});	
	}
	</script>





