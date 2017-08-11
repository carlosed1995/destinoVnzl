<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('txtnombre',$rest->nombre,['class'=>'form-control','disabled','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>

<div class="form-group">
		{!!Form::label('direccion','Dirección:')!!}
		{!!Form::text('txtdireccion',$rest->direccion,['class'=>'form-control','disabled','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>
 <!--<div class="form-group">
      {!!Form::label('url', 'Página Web:')!!}
     {!!Form::text('txturl', $rest->url,['class' =>'form-control','disabled'])!!}
       
  </div> -->

<div class="form-group">
   
 {!!Form::label('horario','Horario de atención')!!}
{!!Form::text('txthorario', $rest->horario, ['class' => 'form-control','disabled'])!!}
  
</div>
<!--<div class="form-group">
  
  {!!Form::label('descripcion','Descripcion')!!}
  {!!Form::text('txtdescripcion', $rest->descripcion, ['class' => 'form-control','disabled'])!!}
    
</div>-->
<!--<div class="form-group">
{!!Form::label('sugerencia','Sugerencias del chef')!!}
{!!Form::text('txtsugerencia', $rest->sugerencias, ['class' => 'form-control','disabled'])!!}

      
</div>-->
<div class="form-group">
  {!!Form::label('descuento','Descuentos')!!}
{!!Form::text('txtdescuento', $rest->descuentos, ['class' => 'form-control','disabled'])!!}
    
</div>
<!--<div class="form-group">
  {!!Form::label('rif','Rif Restaurant')!!}
{!!Form::text('txtrif', $rest->rif, ['class' => 'form-control','disabled'])!!}
</div>-->   

	<br>
<div class="action">
<button id='submitCreate' type="button" value="Reservar" class="btn btn-info btn-lg mostrarModal" class="button" id='{{$rest->id}}' data-title="Edit" data-id="{{$rest->id}}"  data-toggle="modal" type="button">Agregar imagen</button>
 </div>

<br>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×</span><span class="sr-only">Cerrar</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cargar Archivos</h4>
                    </div>
                    <div class="modal-body">
                        {!!Form::open(['route' => 'subirimagenes.store', 'method' => 'post', 'files' => true])!!}
  													@include('alerts.success')                            
                      <input type="hidden" id="id_imagen" value="" name="id_imagen"> 
											
											<div class="form-group">													
												
												<script>
window.onload = function(){
	var btn = document.getElementById('btn');
	btn.onclick = function(){
		var imagen = document.getElementById('img').file;
		 if(imagen.length == 0){
			 alert("Seleccione una Imagen");
		 }else{
			 if(imagen.type != "image/png" && imagen.type != "image/jpg" && imagen.type != "image/jpg" && "image/gif" ){
				 alert('Ingrese un formato valido de imagen con extención png, jpg, jpg, gif');
				 return exit;
			 }
			 
		 }
	}
	
}



</script>
												
											<label class="control-label">Seleccione imagenes</label>
											<input id="img" name="img[]" width="50" height="50" type="file" multiple class="file file-loading" data-allowed-file-extensions='["jpg", "png", "jpeg"]'>

												</div>
                    {!!Form::submit('Subir Imagenes',['class'=>'btn btn-primary', 'id'=>'btn'])!!}
    								{!!Form::close()!!}
                    </div>
										</div>
					</div>
</div>

	
