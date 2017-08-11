@extends('layouts.admin')
@section('content')
 

{!!Form::open(['route' => 'PlanesUnicos.store', 'method' => 'POST', 'files' => true])!!}										
	<script src="/../public/js/solonumeros.js"></script>
<div class="form-group">
 <label>Nombre</label>
			<input type="text" name="txtnombre" placeholder="Ingrese nombre " id="" class="form-control" required>
</div>



		<div class="form-group">
 
			<label>Direccion</label>
			<input type="text" name="txtdireccion" placeholder="Ingrese dirección " id="" class="form-control" required>
		</div>
		<div class="form-group">

			<label>Teléfono</label>
			<input type="text" name="txttelefono" placeholder="Ingrese un número de teléfono" id="telefonoopcional" class="form-control" minlength="11" maxlength="11" required>
		</div>
	<div class="form-group">

			<label>Teléfono Opcional</label>
			<input type="text" name="txttelefono2" placeholder="Ingrese un número de teléfono" id="telefonoopcional" class="form-control" minlength="11" maxlength="11" >
		</div>


 <!--<div class="form-group">

			<label>Página web</label> 
			<input type="text" name="txturl" placeholder="Ingrese la página web del Restaurant" id="" class="form-control" required>
</div>--> 

<div class="form-group">

			<label>Correo</label> 
			<input type="email" name="txtcorreo" placeholder="Ingrese ecorreo electrónico" id="" class="form-control" >
</div>







<label>Categoria</label>
	<div class="form-group">
   
		<select name="catplan" id="catplan" class="form-control" required>

 <option value="">Seleccione</option>
      		@foreach($catplan as $catpl)
			<option value="{{$catpl->id}}">{{$catpl->nombre}}</option>
			@endforeach
      
		</select>	
</div>


<div class="form-group">
	<label>Destacados</label>
	<label><input type="radio" name='destacado' value="1">Si</label>
	<label><input type="radio" name='destacado' value="0">No</label>
</div>



	<div class="form-group">
	<label>Número de Destacado</label>
		<input type="text" name="destacado" placeholder="Ingrese un número de destacado" name="destacado" id="destacado" class="form-control" >
		</div>
		
		
			<div class="form-group">

			<label>Costo del Plan</label>
			<input type="text" name="costo" placeholder="Ingrese costo del plan" id="costo" class="form-control" required>
		</div>
		

<div class="form-group">
	<label >Paquetes disponibles</label>
<input type="text" name="paquetes" id="paquetes" placeholder="Ingrese un número de paquetes disponibles" class="form-control col-lg-8" required></div>  


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


<!--<div class="form-group">
			<label>Sugerencias</label>
			<input type="text" name="txtsugerencia" placeholder="Ingrese sugerencia del chef" id="" class="form-control" >
</div>-->




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
	




		
      <br>
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
			
	
		</select>	

</div>



	<label>Ciudad</label>
	<div class="form-group">
		<select name="txtciudad" id="select-project" class="form-control" required>
		<option value="">Seleccione</option>
	
		</select>	
		
	</div>


 <label>Zona</label>
	<div class="form-group">
   
		<select name="txtzona" id="select-level" class="form-control" required>

 <option value="">Seleccione</option>
      		@foreach($zonas as $zona)
			<option value="{{$zona->id}}">{{$zona->Nombre}}</option>
			@endforeach
      
		</select>	
</div>
		
	
<div class="form-group">
	<label>Imagen principal</label>
	<input id="img" name="img" type="file" class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]' required>

</div>
<br>



	 <div class="form-group"> 
  {!!Form::submit('Registrar',['class'=>'btn btn-info', 'id'=>'btn'])!!}			
	<!--	<button type="button" class="btn btn-info">Información</button>-->
</div>


<script>
$(function(){	
	$('#txtpais').on('change', onSelectPais);
//	$('select-level');	
});	
	function onSelectPais(){
	var idk =	$(this).val();
    if(idk){
      
    }else{
      idk=0;
    }
		//ajazzz		
		$.get('/proyecto2/'+idk+'/nombre', function(data){
			var htmlSlek = '<option value="">Seleccione</option>';
			for(var i=0; i<data.length; i++){
			htmlSlek += '<option value="'+data[i].id+'">'+data[i].Nombre+'</option>';
			}
      $('#id-estado').html(htmlSlek);
		});		
	}
</script>


<script>
$(function(){	
	$('#id-estado').on('change', onSelectEstado);
//	$('select-level');	
});	
	function onSelectEstado(){
	var idk =	$(this).val();
		//ajazzz	
    if(idk){
      
    }else{
      idk=0;
    }
		$.get('/proyecto1/'+idk+'/nombre', function(data){
			var htmlSlek = '<option value="">Seleccione</option>';
			for(var i=0; i<data.length; i++){
			htmlSlek += '<option value="'+data[i].id+'">'+data[i].Nombre+'</option>';
				
			}	
      $('#select-project').html(htmlSlek);
		});		
	}
</script>

<script>
$(function(){	
	$('#select-project').on('change', onSelectEstados);
//	$('select-level');	
});
	
	function onSelectEstados(){
	var ides =	$(this).val();
		//ajazzz
        if(ides){
      
    }else{
      ides=0;
    }
    
    
    
    
		$.get('/proyecto/'+ides+'/nombre', function(data){
			var htmlSlec = '<option value="">Seleccione</option>';
			for(var i=0; i<data.length; i++){
			htmlSlec += '<option value="'+data[i].id+'">'+data[i].Nombre+'</option>';
			}
      	$('#select-level').html(htmlSlec);
		});
	}
</script>


<script>
$('#micheckbox').on('change', function() {
    if( $(this).is(':checked') ){
   $('#micheckbox').val('1');  
    } else {
   $('#micheckbox').val('0');
    }
});


$('#micheckbox2').on('change', function() {
    if( $(this).is(':checked') ){
   $('#micheckbox2').val('1');  
    } else {
   $('#micheckbox2').val('0');
    }
});


$('#micheckbox3').on('change', function() {
    if( $(this).is(':checked') ){
   $('#micheckbox3').val('1');  
    } else {
   $('#micheckbox3').val('0');
    }
});

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









@endsection









