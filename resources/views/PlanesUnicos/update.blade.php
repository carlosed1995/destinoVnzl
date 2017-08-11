
<div class="form-group">
 <label>Nombre</label>
			<input type="text" value="{!!$planes->nombre!!}" name="txtnombre" placeholder="Ingrese nombre " id="" class="form-control" required>
</div>
		<div class="form-group">

			<label>Direccion</label>
			<input type="text" value="{!!$planes->direccion!!}" name="txtdireccion" placeholder="Ingrese dirección " id="" class="form-control" required>
		</div>
		<div class="form-group">

			<label>Teléfono</label>
			<input type="text" value="{!!$planes->telefono!!}" name="txttelefono" placeholder="Ingrese un número de teléfono" id="" class="form-control" required>
		</div>
		
		
		<div class="form-group">
	<label>Teléfono Opcional</label>
			<input type="text" name="txttelefono2" value="{!!$planes->telefono2!!}" placeholder="Ingrese un número de teléfono" name="telefono2" id="telefono2" class="form-control" minlength="11" maxlength="11">
		</div>
 <!--<div class="form-group">

			<label>Página web</label> 
			<input type="text" name="txturl" placeholder="Ingrese la página web del Restaurant" id="" class="form-control" required>
</div>--> 

<div class="form-group">

			<label>Correo</label> 
			<input type="email" value="{!!$planes->correo!!}" name="txtcorreo" placeholder="Ingrese ecorreo electrónico" id="" class="form-control" >
</div>


<label>Categoria</label>
	<div class="form-group">
   
		<select name="catplan" id="catplan" class="form-control" required>
 <option value="">Seleccione</option>
      		@foreach($catplan as $catpl)
      	<option value="{{$catpl->id}}" "@if($catpl->id == $planes->cat_plan) selected='selected'@endif">{{$catpl->nombre}}</option>
		
		
			@endforeach
      
		</select>	
</div>



<div class="form-group">
	<label>Destacados</label>
	<label><input type="radio" name='destacado' value="1" "@if($planes->destacado == 1) checked='checked'@endif">Si</label>
	<label><input type="radio" name='destacado' value="0" "@if($planes->destacado == 0) checked='checked'@endif">No</label>
</div>


	<div class="form-group"> 
	<label>Número de Destacado</label>
		<input type="text" name="ndestacado" value="{!!$planes->numero_destacado!!}" placeholder="Ingrese un número de destacado" name="destacado" id="destacado" class="form-control" >
		</div>


<div class="form-group">
	<label >Paquetes disponibles</label>
<input type="text" name="paquetes" id="paquetes" value="{!!$planes->n_paquetes_disp!!}" class="form-control col-lg-8" required></div>  



			
			
			

<br>
<br>

<div class="form-group">
	<label >Costo:</label>
<input type="text" name="costo" value="{!!$planes->costos!!}" class="form-control col-lg-8" required></div>  




<br>
<br>
<br>

<script>
	
	

 $('#select').focusin( function()
     {
		  $("#select").datepicker();
    
		});
//	$('select-level');	


//	$('select-level');	

    
      $('#select1').focusin( function()
     
        $("#select1").datepicker();
   
     	});

</script>


<br>

<div align="center">
<h2>Redes Sociales</h2>
</div>
<div class="form-group">

		
<label for="" class="col-md-4 control-label">Facebook</label>
	<input id="" type="text"  value="{!!$planes->facebook!!}" class="form-control" placeholder="Facebook " name="facebook" >
	<span class="help-block"></span>

	</div>
	
	
	<div class="form-group">

		
<label for="" class="col-md-4 control-label">Instagram</label>
	<input id="" type="text"  value="{!!$planes->instagram!!}" class="form-control" placeholder="Instagram" name="instagram" >
	<span class="help-block"></span>

	</div>
	
	
	
		
	<div class="form-group">

		
<label for="" class="col-md-4 control-label">Twitter</label>
	<input id="" type="text"  value="{!!$planes->twitter!!}" class="form-control" placeholder="Twitter" name="twitter" >
	<span class="help-block"></span>

	</div>
		
		
			<div class="form-group">

		
<label for="" class="col-md-4 control-label">Google+</label>
	<input id="" type="text"  value="{!!$planes->google!!}" class="form-control" placeholder="google" name="google" >
	<span class="help-block"></span>

	</div>
	
	
		<div class="form-group">

		
<label for="" class="col-md-4 control-label">Youtube</label>
	<input id="" type="text"  value="{!!$planes->youtube!!}" class="form-control" placeholder="youtube" name="youtube" >
	<span class="help-block"></span>

	</div>

	<br><br>
	





 <label>Pais</label>
	<div class="form-group">
		<select name="txtpais" id="txtpais" class="form-control" >
			<option value="">Seleccione</option>
		@foreach($pais as $ps)
			<option value="{{$ps->id}}" "@if($ps->id == $planes->pais) selected='selected'@endif">{{$ps->Nombre}}</option>
			@endforeach
		</select>	

</div>


 <label>Estado</label>
	<div class="form-group">
		<select name="txtestado" id="id-estado" class="form-control" >
			<option value="">Seleccione</option>
			@foreach($estados as $estado)
			<option value="{{$estado->id}}" "@if($estado->id == $planes->estado) selected='selected'@endif">{{$estado->Nombre}}</option>
			@endforeach
	
		</select>	

</div>



	<label>Ciudad</label>
	<div class="form-group">
		<select name="txtciudad" id="select-project" class="form-control">
		<option value="">Seleccione</option>
	
     	@foreach($ciudad as $ciud)
			<option value="{{$ciud->id}}" "@if($ciud->id == $planes->ciudad) selected='selected'@endif">{{$ciud->Nombre}}</option>
			@endforeach
      
		</select>	
		
	</div>


 <label>Zona</label>
	<div class="form-group">
   
		<select name="txtzona" id="select-level" class="form-control" >

 <option value="">Seleccione</option>
      		@foreach($zonas as $zona)
			<option value="{{$zona->id}}" "@if($zona->id == $planes->zona) selected='selected'@endif">{{$zona->Nombre}}</option>
			@endforeach
      
		</select>	
</div>
		









      <br>

		
	
<div class="form-group">
	<label>Foto oferta principal</label>
	<input id="img" name="img" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]'>

</div>

<script>
  
   $("#img").fileinput({
           initialPreviewAsData: true,
            initialPreview: [
                "/../public/imagenes/{{$planes->img}}",
               
            ],
     
       initialPreviewConfig: [
                {caption: "{{$planes->img}}", size: 329892, width: "120px", key: 1}
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
	$("#destacado").keydown(function(event) {
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




