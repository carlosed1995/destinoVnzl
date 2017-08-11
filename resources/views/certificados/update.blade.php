
<div class="form-group">
 <label>Nombre de Diversión</label>
			<input type="text" value="{!!$certificados->nombre!!}" name="txtnombre" placeholder="Ingrese nombre " id="" class="form-control" >
</div>
		<div class="form-group">

			<label>Direccion</label>
			<input type="text" value="{!!$certificados->direccion!!}" name="txtdireccion" placeholder="Ingrese dirección " id="" class="form-control" >
		</div>
		<div class="form-group"> 
 
			<label>Teléfono</label>
			<input type="text" value="{!!$certificados->telefono!!}" name="txttelefono" placeholder="Ingrese un número de teléfono" id="" class="form-control" >
		</div>
 <!--<div class="form-group">

			<label>Página web</label> 
			<input type="text" name="txturl" placeholder="Ingrese la página web del Restaurant" id="" class="form-control" required>
</div>--> 

<div class="form-group">

			<label>Correo</label> 
			<input type="email" value="{!!$certificados->correo!!}" name="txtcorreo" placeholder="Ingrese ecorreo electrónico" id="" class="form-control" >
</div>

		
	</div>

<div class="form-group">
<input type="text" value="{!!$certificados->titulo1!!}" name="titulo1" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo1',$certificados->txttitulo1,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>

<br>
<br>
<div class="form-group">
<input type="text" value="{!!$certificados->titulo2!!}"  name="titulo2" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo2',$certificados->txttitulo2,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>
    <div class="form-group">
<h3>
  Estatus del texto opcional
    </h3> 


         <div class="checkbox">
         <label>
 <label class="radio-inline"> <input type="checkbox">Habilitado</label>

 <label class="radio-inline"><input type="checkbox">Deshabilitado</label>

                </label>
             </div>
          </div>
<br>
 



    
  <div class="form-group">
<input type="text" value="{!!$certificados->titulo3!!}" name="titulo3" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo3',$certificados->txttitulo3,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>
  
  <br>
  <div class="form-group">
<h3>
  Estatus del texto opcional
    </h3> 


         <div class="checkbox">
         <label>
 <label class="radio-inline"> <input type="checkbox">Habilitado</label>

 <label class="radio-inline"><input type="checkbox">Deshabilitado</label>

                </label>
             </div>
          </div>

  
  
  
  <br>
<br>

  
  <div class="form-group">
<input type="text" value="{!!$certificados->titulo4!!}" name="titulo4" placeholder="Título del texto" id="" class="form-control" >
 {!!Form::textarea('txttitulo4',$certificados->txttitulo4,['class'=>'form-control ckeditor','placeholder'=>'terminos y condiciones'])!!}
</div>
    <br>
    <br>
    <div class="form-group">
<h3>
  Estatus del texto opcional
    </h3> 


         <div class="checkbox">
         <label>
 <label class="radio-inline"> <input type="checkbox">Habilitado</label>

 <label class="radio-inline"><input type="checkbox">Deshabilitado</label>

                </label>
             </div>
          </div>
 




			<br>




 <label>Pais</label>
	<div class="form-group">
		<select name="txtpais" id="txtpais" class="form-control" >
			<option value="">Seleccione</option>
		@foreach($pais as $ps)
			<option value="{{$ps->id}}" "@if($ps->id == $certificados->pais) selected='selected'@endif">{{$ps->Nombre}}</option>
			@endforeach
		</select>	

</div>


 <label>Estado</label>
	<div class="form-group">
		<select name="txtestado" id="id-estado" class="form-control" >
			<option value="">Seleccione</option>
			@foreach($estados as $estado)
			<option value="{{$estado->id}}" "@if($estado->id == $certificados->estado) selected='selected'@endif">{{$estado->Nombre}}</option>
			@endforeach
	
		</select>	

</div>



	<label>Ciudad</label>
	<div class="form-group">
		<select name="txtciudad" id="select-project" class="form-control">
		<option value="">Seleccione</option>
	
     	@foreach($ciudad as $ciud)
			<option value="{{$ciud->id}}" "@if($ciud->id == $certificados->ciudad) selected='selected'@endif">{{$ciud->Nombre}}</option>
			@endforeach
      
		</select>	
		
	</div>


 <label>Zona</label>
	<div class="form-group">
   
		<select name="txtzona" id="select-level" class="form-control" >

 <option value="">Seleccione</option>
      		@foreach($zonas as $zona)
			<option value="{{$zona->id}}" "@if($zona->id == $certificados->zona) selected='selected'@endif">{{$zona->Nombre}}</option>
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
                "/../public/imagenes/{{$certificados->img}}",
               
            ],
     
       initialPreviewConfig: [
                {caption: "{{$certificados->img}}", size: 329892, width: "120px", key: 1}
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





