
<div class="form-group">
 <label>Nombre</label>
			<input type="text" value="{!!$destinos->nombre!!}" name="txtnombre" placeholder="Ingrese nombre " id="" class="form-control" required>
</div>
		<div class="form-group">

			<label>Direccion</label>
			<input type="text" value="{!!$destinos->direccion!!}" name="txtdireccion" placeholder="Ingrese dirección " id="" class="form-control" required>
		</div>
		<div class="form-group">

			<label>Teléfono</label>
			<input type="text" value="{!!$destinos->telefono!!}" name="txttelefono" placeholder="Ingrese un número de teléfono" id="" class="form-control" required>
		</div>
		
		
		<div class="form-group">
	<label>Teléfono Opcional</label>
			<input type="text" name="txttelefono2" value="{!!$destinos->telefono2!!}" placeholder="Ingrese un número de teléfono" name="telefono2" id="telefono2" class="form-control" minlength="11" maxlength="11">
		</div>
 <!--<div class="form-group">

			<label>Página web</label> 
			<input type="text" name="txturl" placeholder="Ingrese la página web del Restaurant" id="" class="form-control" required>
</div>--> 

<div class="form-group">

			<label>Correo</label> 
			<input type="email" value="{!!$destinos->correo!!}" name="txtcorreo" placeholder="Ingrese ecorreo electrónico" id="" class="form-control" >
</div>

			
			
			
<h3>Rango de Fecha de destino</h3>
<div class="form-group">
<label>Fecha Inicial:
<input type="text" data-date-format='yyyy-mm-dd' name="fechaini" value="{!!$destinos->fecha_inicial!!}"  id="select" class="form-control col-lg-8" required></div>

<div class="form-group">
<label>Fecha Final:
<input type="text" data-date-format='yyyy-mm-dd' name="fechafin" value="{!!$destinos->fecha_fin!!}" id="select1" class="form-control col-lg-8" required></div>  

<br>
<br>

<div class="form-group">
	<label >Paquetes disponibles:</label>
<input type="text" name="paquetes" id='paquetes' value="{!!$destinos->paquetes_dipon!!}" class="form-control col-lg-8" required></div>  



<br>
<br>
<br>

<script>
	
 $('#select').focusin( function()
     {
       $("#select").datepicker();
     });
     
     $('#select1').focusin( function()
     {
        $("#select1").datepicker();
     });
     
     
</script>




<br>

<div align="center">
<h2>Redes Sociales</h2>
</div>
<div class="form-group">

		
<label for="" class="col-md-4 control-label">Facebook</label>
	<input id="" type="text"  value="{!!$destinos->facebook!!}" class="form-control" placeholder="Facebook " name="facebook" >
	<span class="help-block"></span>

	</div>
	
	
	<div class="form-group">

		
<label for="" class="col-md-4 control-label">Instagram</label>
	<input id="" type="text"  value="{!!$destinos->instagram!!}" class="form-control" placeholder="Instagram" name="instagram" >
	<span class="help-block"></span>

	</div>
	
	
	
		
	<div class="form-group">

		
<label for="" class="col-md-4 control-label">Twitter</label>
	<input id="" type="text"  value="{!!$destinos->twitter!!}" class="form-control" placeholder="Twitter" name="twitter" >
	<span class="help-block"></span>

	</div>
		
		
			<div class="form-group">

		
<label for="" class="col-md-4 control-label">Google+</label>
	<input id="" type="text"  value="{!!$destinos->google!!}" class="form-control" placeholder="google" name="google" >
	<span class="help-block"></span>

	</div>
	
	
		<div class="form-group">

		
<label for="" class="col-md-4 control-label">Youtube</label>
	<input id="" type="text"  value="{!!$destinos->youtube!!}" class="form-control" placeholder="youtube" name="youtube" >
	<span class="help-block"></span>

	</div>

	<br><br>
	





 <label>Pais</label>
	<div class="form-group">
		<select name="txtpais" id="txtpais" class="form-control" required>
			<option value="">Seleccione</option>
		@foreach($pais as $ps)
			<option value="{{$ps->id}}" "@if($ps->id == $destinos->pais) selected='selected'@endif">{{$ps->Nombre}}</option>
			@endforeach
		</select>	

</div>


 <label>Estado</label>
	<div class="form-group">
		<select name="txtestado" id="id-estado" class="form-control" required>
			<option value="">Seleccione</option>
			@foreach($estados as $estado)
			<option value="{{$estado->id}}" "@if($estado->id == $destinos->estado) selected='selected'@endif">{{$estado->Nombre}}</option>
			@endforeach
	
		</select>	

</div>



	<label>Ciudad</label>
	<div class="form-group">
		<select name="txtciudad" id="select-project" class="form-control" required>
		<option value="">Seleccione</option>
	
     	@foreach($ciudad as $ciud)
			<option value="{{$ciud->id}}" "@if($ciud->id == $destinos->ciudad) selected='selected'@endif">{{$ciud->Nombre}}</option>
			@endforeach
      
		</select>	
		
	</div>


 <label>Zona</label>
	<div class="form-group">
   
		<select name="txtzona" id="select-level" class="form-control" required>

 <option value="">Seleccione</option>
      		@foreach($zonas as $zona)
			<option value="{{$zona->id}}" "@if($zona->id == $destinos->zona) selected='selected'@endif">{{$zona->Nombre}}</option>
			@endforeach
      
		</select>	
</div>
		










      <br>

		
	
<div class="form-group">
	<label>Foto oferta principal</label>
	<input id="img" name="img" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' >

</div>

<script>
  
   $("#img").fileinput({
           initialPreviewAsData: true,
            initialPreview: [
                "/../public/imagenes/{{$destinos->img}}",
               
            ],
     
       initialPreviewConfig: [
                {caption: "{{$destinos->img}}", size: 329892, width: "120px", key: 1}
            ],
     
        });

</script>





<br>



<script>
$(function(){	
	$('#txtpais').click('change', onSelectPais);
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


<script>
$(function(){	
	$('#id-estado').click('change', onSelectEstado);
//	$('select-level');	
});	
	function onSelectEstado(){
	var idk =	$(this).val();
		//ajazzz	
  
		$.get('/proyecto1/'+idk+'/nombre', function(data){
			var htmlSlek = '<option value="">Seleccione</option>';
			for(var i=0; i<data.length; i++){
			htmlSlek += '<option value="'+data[i].id+'">'+data[i].Nombre+'</option>';
				 $('#select-project').html(htmlSlek);
			}	
     
		});		
	}
</script>

<script>
$(function(){	
	$('#select-project').click('change', onSelectEstados);
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


<script>

	
	$(document).ready(function(){ 
	$("#paquetes").keydown(function(event) {
	   if(event.shiftKey)
	   {
	        event.preventDefault();
	   }

	   if (event.keyCode == 46 || event.keyCode == 8)    {
	   }
	   else {
	        if (event.keyCode < 95) {
	          if (event.keyCode < 48 || event.keyCode > 57) {
	                event.preventDefault();
	          }
	        } 
	        else {
	              if (event.keyCode < 96 || event.keyCode > 105) {
	                  event.preventDefault();
	              }
	        }
	      }
	   });
	});
	
</script>





